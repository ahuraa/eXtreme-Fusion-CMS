<?php defined('EF5_SYSTEM') || exit;
/***********************************************************
| eXtreme-Fusion 5.0 Beta 5
| Content Management System       
|
| Copyright (c) 2005-2012 eXtreme-Fusion Crew                	 
| http://extreme-fusion.org/                               		 
|
| This product is licensed under the BSD License.				 
| http://extreme-fusion.org/ef5/license/						 
***********************************************************/

if ($_user->isLoggedIn())
{
	HELP::redirect(ADDR_SITE);
}

$_locale->load('register');

$theme = array(
	'Title' => __('Register').' &raquo; '.$_sett->get('site_name'),
	'Keys' => 'Rejestracja, stwórz konto, uzyskaj dostęp',
	'Desc' => 'Chcesz zarejesstrować się na: '.$_sett->get('site_name').'? Możesz to zrobić już teraz.'
);

if ($_sett->get('enable_registration') != 1)
{
	// Rejestracja wyłaczona, wyświetlę komunikat
	throw new userException('Rejestra została wyłączona przez Administratora.');
}

$_mail = new Mailer($_sett->get('smtp_username'), $_sett->get('smtp_password'), $_sett->get('smtp_host'));

$_protection = NULL;

if ($validate_method = $_sett->getUnserialized('validation', 'register'))
{
	$_security = new Security($_pdo, $_request);

	// Zwraca referencje obiektu klasy zabezpieczejącej
	if ($_protection = $_security->getCurrentModule($validate_method))
	{
		// Przekazywanie referencji do obiektów
		$_protection->setObjects(new Basic, $_pdo, $_sett, $_system);
	}
}

if ($_route->getByID(1) === 'active' && $_route->getByID(2))
{
	$valid = $_pdo->getRow('SELECT `id` FROM [users] WHERE `valid_code`= :code',
		array(':code', $_route->getByID(2), PDO::PARAM_STR)
	);

	if ($_sett->get('admin_activation') == 1)
	{
		$status = 2;
	}
	else
	{
		$status = 0;
	}

	$query = $_pdo->exec('UPDATE [users] SET `valid` = :valid, `valid_code` = \'\', `status` = \''.$status.'\' WHERE `id` = :id',
		array(
			array(':valid', 1, PDO::PARAM_INT),
			array(':id', $valid['id'], PDO::PARAM_INT)
		)
	);

	if ($_sett->get('admin_activation') == 1)
	{
		$_tpl->assign('active', TRUE);
	}
	else
	{
		$_tpl->assign('create', TRUE);
	}
}

if ($_request->post('create_account')->show())
{
	$error = array();

	if ( ! ($_request->post('username')->show() && $_request->post('user_pass')->show() && $_request->post('user_email')->show() && $_request->post('hide_email')->isNum()))
	{
		$error[] = '1';
	}

	if ( ! $_user->validLogin($_request->post('username')->show()))
	{
		$error[] = '2';
	}
	else
	{
		if ( ! $_user->availableLogin($_request->post('username')->show()))
		{
			$error[] = '5';
		}
	}

	if ( ! $_user->validPassword($_request->post('user_pass')->show(), $_request->post('user_pass2')->show()))
	{
		$error[] = '3';
	}

	if ( ! $_user->validEmail($_request->post('user_email')->show()))
	{
		$error[] = '4';
	}
	else
	{
		if ( ! $_user->availableEmail($_request->post('user_email')->show()))
		{
			$error[] = '6';
		}
		else
		{
			if ($_user->bannedByEmail($_request->post('user_email')->show()))
			{
				$error[] = '7';
			}
		}
	}

	if ($_protection)
	{
		if ( ! $_protection->isValidAnswer($_security->getUserAnswer($_protection->getResponseInputs())))
		{
			$error['security'] = '8';
		}
	}

	if ( ! $error)
	{
		if ($_sett->get('email_verification') == 1)
		{
			$status = 1;
			$valid = md5(uniqid(time()));
		}
		elseif ($_sett->get('admin_activation') == 1)
		{
			$status = 2;
			$valid = md5(uniqid(time()));
		}
		else
		{
			$status = 0;
			$valid = '';
		}

		$salt = substr(sha512(uniqid(rand(), true)), 0, 5);
		$password = sha512($salt.'^'.$_request->post('user_pass')->show());

		$query = $_pdo->exec('
			INSERT INTO [users] (`username`, `password`, `salt`, `link`, `email`, `hide_email`, `valid_code`, `joined`, `status`, `role`, `roles`)
			VALUES (:username, \''.$password.'\', \''.$salt.'\', :link, :email, :hidemail, :valid, '.time().', \''.$status.'\', 2, \''.serialize(array(2, 3)).'\')',
			array(
				array(':username', $_request->post('username')->show(), PDO::PARAM_STR),
				array(':link', HELP::Title2Link($_request->post('username')->show()), PDO::PARAM_STR),
				array(':email', $_request->post('user_email')->show(), PDO::PARAM_STR),
				array(':hidemail', $_request->post('hide_email')->show(), PDO::PARAM_STR),
				array(':valid', $valid, PDO::PARAM_STR)
			)
		);
		
		if (class_exists('PhpBB', FALSE))
		{
			if ($_phpbb->bridgeOn())
			{
				$query = $_phpbb->registerPhpBB($_request->post('username')->show(), $_request->post('user_pass')->show(), $_request->post('user_email')->show());
			}
		}

		$lastuser = $_pdo->getRow('SELECT `id` FROM [users] WHERE `username` = :user',
			array(':user', $_request->post('username')->show(), PDO::PARAM_STR)
		);

		$query = $_pdo->getData('SELECT * FROM [user_fields] WHERE `register` = 1');
		$match = $_pdo->getRowsCount($query);
		$i = 0; $field = ''; $index_val = ''; $field_val = '';
		if($match != NULL)
		{
			foreach($query as $data)
			{
				$index = $data['index'];
				$val = $_request->post($index)->show();
				$index_val .= '`'.$index.'`'.($i < $match-1 ? ', ' : '');
				$field_val .= '"'.$val.'"'.($i < $match-1 ? ', ' : '');
				$field .= '`'.$index.'` = "'.$val.'"'.($i < $match-1 ? ', ' : '');
				$i++;
			}

			$_user->updateField($field, $lastuser['id'], $index_val, $field_val);
		}

		if ($_sett->get('email_verification') === '1')
		{
			$message = 'Witaj '.$_request->post('username')->show().'!<br /><br />
				Dane dla Twojego konta na portalu '.$_sett->get('site_name').':<br />
				<strong>Login:</strong> '.$_request->post('username')->show().'<br />
				<strong>Hasło:</strong> '.$_request->post('user_pass')->show().'<br />
				<br />
				Żeby w pełni korzystać z portalu musisz aktywować swoje konto za pomocą poniższego linki:<br />
				<br />
				<a href="'.$_route->path(array('controller' => 'register', 'action' => 'active', $valid)).'">'.$_route->path(array('controller' => 'register', 'action' => 'active', $valid)).'</a><br />
				<br />
				<strong>Pozdrawiam</strong><br />
				<em>'.$_sett->get('site_username').'</em><br />
				<br />
				<hr />
				Wiadomość wysłana automatycznie. Proszę nie odpisywać.';

			$_mail->send($_request->post('user_email')->show(), $_sett->get('contact_email'), __('Aktywacja konta'), $message, array(), TRUE);

			$_tpl->assign('email_send', TRUE);
		}
		elseif ($_sett->get('admin_activation') == 1)
		{
			$_tpl->assign('active', TRUE);
		}
		else
		{
			$_tpl->assign('create', TRUE);
		}
	}
	else
	{
		$_tpl->assignGroup(array(
			'error' => $error,
			'username' => $_request->post('username')->show(),
			'email' => $_request->post('user_email')->show(),
			'hide_email' => $_request->post('hide_email')->show()
		));
	}
}

$result = $_pdo->getData('SELECT `id`, `name`, `index`, `type`, `option` FROM [user_fields] WHERE `register` = 1 ORDER by `id`');
if ($result)
{
	if ($_pdo->getRowsCount($result))
	{
		$i = 0; $data = array();
		foreach ($result as $row)
		{
			if ($row['type'] == 3)
			{
				$n = 0;
				foreach(unserialize($row['option']) as $keys => $val)
				{
					$option[$i][$keys] = array(
						'value' => $val,
						'n' => $n
					);
					$n++;
				}
				$_tpl->assign('option', $option);
			}
			
			$data[] = array(
				'row_color' => $i % 2 == 0 ? 'tbl2' : 'tbl1',
				'id' => $row['id'],
				'name' => $row['name'],
				'index' => $row['index'],
				'type' => $row['type'],
				'value' => NULL,
			);
			$i++;
		}
	}
	$_tpl->assignGroup(array(
		'data' => $data,
		'i' => $i
	));
}

if ($_sett->get('enable_terms') == 1)
{
	$_tpl->assign('license_agreement', $_sett->get('license_agreement'));
}

$_tpl->assignGroup(array(
	'portal' => $_sett->get('site_name'),
	'validation' => (bool) $_protection,
	'enable_terms' => $_sett->get('enable_terms')
));

if ($_protection)
{
	$_tpl->assign('security', isset($error['security']) ? $_protection->getView_wrongAnswer() : $_protection->getView());
}