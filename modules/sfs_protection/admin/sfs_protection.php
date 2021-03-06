<?php
/*---------------------------------------------------------------+
| eXtreme-Fusion - Content Management System - version 5         |
+----------------------------------------------------------------+
| Copyright (c) 2005-2012 eXtreme-Fusion Crew                	 |
| http://extreme-fusion.org/                               		 |
+----------------------------------------------------------------+
| This product is licensed under the BSD License.				 |
| http://extreme-fusion.org/ef5/license/						 |
+---------------------------------------------------------------*/
try
{
	require_once '../../../config.php';
	require DIR_SITE.'bootstrap.php';
	require_once DIR_SYSTEM.'admincore.php';
	
	$_locale->moduleLoad('admin', 'sfs_protection');

    if ( ! $_user->hasPermission('module.sfs_protection.admin'))
    {
        throw new userException(__('Access denied'));
    }

    $_tpl = new AdminModuleIframe('sfs_protection');
	
	$_tpl->setHistory(__FILE__);
	
	if ($_request->get('action')->show() === 'delete' && $_request->get('id')->isNum())
    {
		$count = $_pdo->exec('DELETE FROM [sfs_protection] WHERE `id` = '.$_request->get('id')->show());

		if ($count)
		{
			$_request->redirect(FILE_PATH, array('act' => 'delete', 'status' => 'ok'));
		}

		$_request->redirect(FILE_PATH, array('act' => 'delete', 'status' => 'error'));
    }
	elseif ($_request->get('action')->show() === 'delete_all')
	{
		$count = $_pdo->exec('DELETE FROM [sfs_protection]');

		if ($count)
		{
			$_request->redirect(FILE_PATH, array('act' => 'delete', 'type' => 'all', 'status' => 'ok'));
		}

		$_request->redirect(FILE_PATH, array('act' => 'delete', 'type' => 'all', 'status' => 'error'));
	}
    else
    {
	
		$query = $_pdo->getData('SELECT * FROM [sfs_protection]');
		
		if ($res = $_pdo->getRowsCount($query))
		{
			$i = 0;
			foreach ($query as $row)
			{
				
				$data[] = array(
					'row_color' => $i % 2 == 0 ? 'tbl1' : 'tbl2',
					'id' => $row['id'],
					'name' => $row['name'],
					'email' => $row['email'],
					'ip' => $row['ip'],
					'datestamp' => HELP::showDate('longdate', $row['datestamp'])
				);
				$i++;
			}
			$_tpl->assign('data', $data);
		}
	}
	
	$_tpl->template('admin.tpl');
}
catch(optException $exception)
{
    optErrorHandler($exception);
}
catch(systemException $exception)
{
    systemErrorHandler($exception);
}
catch(userException $exception)
{
    userErrorHandler($exception);
}
catch(PDOException $exception)
{
    PDOErrorHandler($exception);
}