Issue 1:

An error has occurred.
0 Call to undefined method Joomla\Database\Mysqli\MysqliQuery::castAsChar()
Call Stack
#	Function	Location
1	()	JROOT/plugins/finder/jgivecampaigns/jgivecampaigns.php:344
2	PlgFinderJGiveCampaigns->getListQuery()	JROOT/administrator/components/com_finder/src/Indexer/Adapter.php:587
3	Joomla\Component\Finder\Administrator\Indexer\Adapter->getItem()	JROOT/administrator/components/com_finder/src/Indexer/Adapter.php:377
4	Joomla\Component\Finder\Administrator\Indexer\Adapter->reindex()	JROOT/plugins/finder/jgivecampaigns/jgivecampaigns.php:144
5	PlgFinderJGiveCampaigns->onFinderAfterSave()	JROOT/libraries/src/Plugin/CMSPlugin.php:386
6	Joomla\CMS\Plugin\CMSPlugin->Joomla\CMS\Plugin\{closure}()	JROOT/libraries/vendor/joomla/event/src/Dispatcher.php:454
7	Joomla\Event\Dispatcher->dispatch()	JROOT/plugins/content/finder/src/Extension/Finder.php:77
8	Joomla\Plugin\Content\Finder\Extension\Finder->onContentAfterSave()	JROOT/libraries/vendor/joomla/event/src/Dispatcher.php:454
9	Joomla\Event\Dispatcher->dispatch()	JROOT/libraries/src/MVC/Model/AdminModel.php:1359
10	Joomla\CMS\MVC\Model\AdminModel->save()	JROOT/components/com_jgive/models/campaignform.php:516
11	JGiveModelCampaignForm->save()	JROOT/administrator/components/com_jgive/controllers/campaign.php:192
12	JGiveControllerCampaign->save()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
13	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_jgive/jgive.php:126
14	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
15	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
16	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
17	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
18	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
19	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
20	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
21	require_once()	JROOT/administrator/index.php:32

Issue 2:

An error has occurred.
0 Joomla\CMS\Event\Model\FormEvent::onSetData(): Argument #1 ($value) must be of type object|array, null given, called in /var/www/ttpl-rt-234-php83.local/public/joomla_61/libraries/src/Event/AbstractEvent.php on line 227
Call Stack
#	Function	Location
1	()	JROOT/libraries/src/Event/Model/FormEvent.php:116
2	Joomla\CMS\Event\Model\FormEvent->onSetData()	JROOT/libraries/src/Event/AbstractEvent.php:227
3	Joomla\CMS\Event\AbstractEvent->setArgument()	JROOT/libraries/src/Event/AbstractEvent.php:115
4	Joomla\CMS\Event\AbstractEvent->__construct()	JROOT/libraries/src/Event/AbstractImmutableEvent.php:51
5	Joomla\CMS\Event\AbstractImmutableEvent->__construct()	JROOT/libraries/src/Event/Model/FormEvent.php:56
6	Joomla\CMS\Event\Model\FormEvent->__construct()	JROOT/libraries/src/MVC/Model/FormBehaviorTrait.php:198
7	Joomla\CMS\MVC\Model\FormModel->preprocessForm()	JROOT/libraries/src/MVC/Model/FormBehaviorTrait.php:115
8	Joomla\CMS\MVC\Model\FormModel->loadForm()	JROOT/components/com_tjvendors/models/vendor.php:100
9	TjvendorsModelVendor->getForm()	JROOT/libraries/src/MVC/View/AbstractView.php:171
10	Joomla\CMS\MVC\View\AbstractView->get()	JROOT/administrator/components/com_tjvendors/views/vendor/view.html.php:60
11	TjvendorsViewVendor->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
12	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_tjvendors/controller.php:39
13	TjvendorsController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
14	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_tjvendors/tjvendors.php:47
15	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
16	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
17	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
18	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
19	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
20	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
21	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
22	require_once()	JROOT/administrator/index.php:32