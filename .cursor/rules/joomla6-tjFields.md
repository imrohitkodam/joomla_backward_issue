Issue 1:

An error has occurred.
0 Cannot access protected property TjfieldsViewFields::$filterForm
Call Stack
#	Function	Location
1	()	JROOT/layouts/joomla/searchtools/default/bar.php:29
2	include()	JROOT/libraries/src/Layout/FileLayout.php:128
3	Joomla\CMS\Layout\FileLayout->render()	JROOT/libraries/src/Layout/FileLayout.php:636
4	Joomla\CMS\Layout\FileLayout->sublayout()	JROOT/layouts/joomla/searchtools/default.php:90
5	include()	JROOT/libraries/src/Layout/FileLayout.php:128
6	Joomla\CMS\Layout\FileLayout->render()	JROOT/libraries/src/Layout/LayoutHelper.php:76
7	Joomla\CMS\Layout\LayoutHelper::render()	JROOT/administrator/components/com_tjfields/views/fields/tmpl/default_bs5.php:107
8	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
9	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/administrator/components/com_tjfields/views/fields/tmpl/default.php:20
10	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
11	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/libraries/src/MVC/View/HtmlView.php:204
12	Joomla\CMS\MVC\View\HtmlView->display()	JROOT/administrator/components/com_tjfields/views/fields/view.html.php:72
13	TjfieldsViewFields->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
14	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_tjfields/controller.php:62
15	TjfieldsController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
16	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_tjfields/tjfields.php:59
17	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
18	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
19	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
20	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
21	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
22	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
23	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
24	require_once()	JROOT/administrator/index.php:32