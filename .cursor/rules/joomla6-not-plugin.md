Issue 1 :
An error has occurred.
0 Call to undefined method JgiveViewCampaigns::getInput()
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_jgive/views/campaigns/tmpl/default_bs5.php:69
2	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
3	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/administrator/components/com_jgive/views/campaigns/tmpl/default.php:20
4	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
5	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/libraries/src/MVC/View/HtmlView.php:204
6	Joomla\CMS\MVC\View\HtmlView->display()	JROOT/administrator/components/com_jgive/views/campaigns/view.html.php:138
7	JgiveViewCampaigns->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
8	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_jgive/controller.php:45
9	JGiveController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
10	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_jgive/jgive.php:126
11	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
12	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
13	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
14	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
15	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
16	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
17	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
18	require_once()	JROOT/administrator/index.php:32

Issue 2:
An error has occurred.
0 Call to undefined method JGiveViewDonors::getInput()
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_jgive/views/donors/view.html.php:55
2	JGiveViewDonors->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
3	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_jgive/controller.php:45
4	JGiveController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
5	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_jgive/jgive.php:126
6	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
7	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
8	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
9	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
10	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
11	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
12	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
13	require_once()	

Issue 3: 
http://ttpl-rt-234-php83.local/joomla_61/administrator/index.php?option=com_tjfields&view=fields&client=com_jgive.campaign

this link still appearing blank check and resolve