#
#<?php die('Forbidden.'); ?>
#Date: 2025-12-08 08:16:53 UTC
#Software: Joomla! 6.0.0 Stable [ Kuimarisha ] 14-October-2025 16:00 UTC

#Fields: datetime	priority clientip	category	message
2025-12-08T08:16:53+00:00	INFO 127.0.0.1	updater	Loading information from update site #4 with name "JGive" and URL https://techjoomla.com/updates/stream/jgive.xml?format=xml took 1.44 seconds
2025-12-08T08:16:54+00:00	INFO 127.0.0.1	updater	Loading information from update site #5 with name "JLike" and URL https://techjoomla.com/component/ars/updates/components/jlike?format=xml&dummy=extension.xml took 0.58 seconds
2025-12-08T08:16:54+00:00	WARNING 127.0.0.1	updater	Error opening url: https://techjoomla.com/component/ars/updates/components/jlike?format=xml&dummy=extension.xml for update site: JLike
2025-12-08T08:16:58+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveViewCampaigns::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/administrator/components/com_jgive/views/campaigns/tmpl/default.php(20): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include('...')
#3 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#4 [ROOT]/administrator/components/com_jgive/views/campaigns/view.html.php(138): Joomla\CMS\MVC\View\HtmlView->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JgiveViewCampaigns->display()
#6 [ROOT]/administrator/components/com_jgive/controller.php(45): Joomla\CMS\MVC\Controller\BaseController->display()
#7 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveController->display()
#8 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#9 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#11 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#12 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#13 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#14 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#15 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#16 [ROOT]/administrator/index.php(32): require_once('...')
#17 {main}
2025-12-08T08:17:57+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveViewDonors::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JGiveViewDonors->display()
#1 [ROOT]/administrator/components/com_jgive/controller.php(45): Joomla\CMS\MVC\Controller\BaseController->display()
#2 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveController->display()
#3 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#5 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#6 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#7 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#8 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#9 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#10 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#11 [ROOT]/administrator/index.php(32): require_once('...')
#12 {main}
2025-12-08T09:22:03+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
#1 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#2 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#4 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#5 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#7 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#8 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#9 [ROOT]/administrator/index.php(32): require_once('...')
#10 {main}
2025-12-08T09:22:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
#1 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#2 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#4 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#5 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#7 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#8 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#9 [ROOT]/administrator/index.php(32): require_once('...')
#10 {main}
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New vendor "admin" has registered on Admin
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:22:06 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <B305w5qRoLUDt0hzvzQNrWoCGys2swc3PgiXDmunSgY@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New vendor "admin" has registered on Admin
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:22:06 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <h1dmZzI2hKQmiIivtXaCW2gYJBG6LnFYJrTKzRQYzg@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Your vendor registration at "Admin" is complete
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:22:06 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <MdmySe8fOeIbuJ54sel6Pvz1Yl4iRaPoKdPjzQFWE@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Your vendor registration at "Admin" is complete
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:22:06 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <cjyBakzeBoT3xfay9NA5vOXK85lwWYImXQMspIQSA1o@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:22:06+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:22:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method Joomla\Database\Mysqli\MysqliQuery::castAsChar()". Stack trace: #0 [ROOT]/administrator/components/com_finder/src/Indexer/Adapter.php(587): PlgFinderJGiveCampaigns->getListQuery()
#1 [ROOT]/administrator/components/com_finder/src/Indexer/Adapter.php(377): Joomla\Component\Finder\Administrator\Indexer\Adapter->getItem()
#2 [ROOT]/plugins/finder/jgivecampaigns/jgivecampaigns.php(144): Joomla\Component\Finder\Administrator\Indexer\Adapter->reindex()
#3 [ROOT]/libraries/src/Plugin/CMSPlugin.php(386): PlgFinderJGiveCampaigns->onFinderAfterSave()
#4 [ROOT]/libraries/vendor/joomla/event/src/Dispatcher.php(454): Joomla\CMS\Plugin\CMSPlugin->Joomla\CMS\Plugin\{closure}()
#5 [ROOT]/plugins/content/finder/src/Extension/Finder.php(77): Joomla\Event\Dispatcher->dispatch()
#6 [ROOT]/libraries/vendor/joomla/event/src/Dispatcher.php(454): Joomla\Plugin\Content\Finder\Extension\Finder->onContentAfterSave()
#7 [ROOT]/libraries/src/MVC/Model/AdminModel.php(1359): Joomla\Event\Dispatcher->dispatch()
#8 [ROOT]/components/com_jgive/models/campaignform.php(516): Joomla\CMS\MVC\Model\AdminModel->save()
#9 [ROOT]/administrator/components/com_jgive/controllers/campaign.php(192): JGiveModelCampaignForm->save()
#10 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->save()
#11 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#12 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#13 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#14 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#15 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#16 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#17 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#18 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#19 [ROOT]/administrator/index.php(32): require_once('...')
#20 {main}
2025-12-08T09:23:24+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "jFile" not found". Stack trace: #0 [ROOT]/administrator/components/com_tjvendors/controllers/vendor.php(114): TjvendorsModelVendor->generateGatewayFields()
#1 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): TjvendorsControllerVendor->generateGatewayFields()
#2 [ROOT]/administrator/components/com_tjvendors/tjvendors.php(47): Joomla\CMS\MVC\Controller\BaseController->execute()
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#5 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#7 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#8 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#9 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#10 [ROOT]/administrator/index.php(32): require_once('...')
#11 {main}
2025-12-08T09:23:33+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type TypeError thrown with message "Joomla\CMS\Event\Model\FormEvent::onSetData(): Argument #1 ($value) must be of type object|array, null given, called in [ROOT]/libraries/src/Event/AbstractEvent.php on line 227". Stack trace: #0 [ROOT]/libraries/src/Event/AbstractEvent.php(227): Joomla\CMS\Event\Model\FormEvent->onSetData()
#1 [ROOT]/libraries/src/Event/AbstractEvent.php(115): Joomla\CMS\Event\AbstractEvent->setArgument()
#2 [ROOT]/libraries/src/Event/AbstractImmutableEvent.php(51): Joomla\CMS\Event\AbstractEvent->__construct()
#3 [ROOT]/libraries/src/Event/Model/FormEvent.php(56): Joomla\CMS\Event\AbstractImmutableEvent->__construct()
#4 [ROOT]/libraries/src/MVC/Model/FormBehaviorTrait.php(198): Joomla\CMS\Event\Model\FormEvent->__construct()
#5 [ROOT]/libraries/src/MVC/Model/FormBehaviorTrait.php(115): Joomla\CMS\MVC\Model\FormModel->preprocessForm()
#6 [ROOT]/components/com_tjvendors/models/vendor.php(100): Joomla\CMS\MVC\Model\FormModel->loadForm()
#7 [ROOT]/libraries/src/MVC/View/AbstractView.php(171): TjvendorsModelVendor->getForm()
#8 [ROOT]/administrator/components/com_tjvendors/views/vendor/view.html.php(60): Joomla\CMS\MVC\View\AbstractView->get()
#9 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): TjvendorsViewVendor->display()
#10 [ROOT]/administrator/components/com_tjvendors/controller.php(39): Joomla\CMS\MVC\Controller\BaseController->display()
#11 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): TjvendorsController->display()
#12 [ROOT]/administrator/components/com_tjvendors/tjvendors.php(47): Joomla\CMS\MVC\Controller\BaseController->execute()
#13 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#14 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#15 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#16 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#17 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#18 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#19 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#20 [ROOT]/administrator/index.php(32): require_once('...')
#21 {main}
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: 
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: admin1 <rohit.kodam@techburner.com>
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New User Details
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:24:27 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <AfFfdR9v5JPir6xXC25qW3PUBDB2lJRTCa8G6HXuYfs@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8


2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: 
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: admin1 <rohit.kodam@techburner.com>
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New User Details
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:24:27 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <RA5Q9I9hPKE731ZOBxI2kR8NYQe3YSmk3Q12BkHaOg@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8


2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:24:27+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:24:27+00:00	WARNING 127.0.0.1	jerror	Could not instantiate mail function.
2025-12-08T09:24:34+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "jFile" not found". Stack trace: #0 [ROOT]/administrator/components/com_tjvendors/controllers/vendor.php(114): TjvendorsModelVendor->generateGatewayFields()
#1 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): TjvendorsControllerVendor->generateGatewayFields()
#2 [ROOT]/administrator/components/com_tjvendors/tjvendors.php(47): Joomla\CMS\MVC\Controller\BaseController->execute()
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#5 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#7 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#8 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#9 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#10 [ROOT]/administrator/index.php(32): require_once('...')
#11 {main}
2025-12-08T09:24:44+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "jFile" not found". Stack trace: #0 [ROOT]/administrator/components/com_tjvendors/controllers/vendor.php(114): TjvendorsModelVendor->generateGatewayFields()
#1 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): TjvendorsControllerVendor->generateGatewayFields()
#2 [ROOT]/administrator/components/com_tjvendors/tjvendors.php(47): Joomla\CMS\MVC\Controller\BaseController->execute()
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#5 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#7 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#8 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#9 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#10 [ROOT]/administrator/index.php(32): require_once('...')
#11 {main}
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New vendor "Test" has registered on Admin
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:24:45 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <s7HqtSY0wz8R4LoQJhtkO2VMTpAf1Xq4ZrExzVzNyA@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New vendor "Test" has registered on Admin
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:24:45 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <OuLyWPzezhYtExGoYnexK5y10gsIFEMynwhxZdA9g@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Your vendor registration at "Admin" is complete
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:24:45 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <BIbSPFUtFQdg5zAO5xu5cD2xz4csYvJOMNcXjebT4@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Your vendor registration at "Admin" is complete
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:24:45 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <EQjFh0fCOCHa7JkNkAwF33aN4Sp25xkntIjFWkdp6Lk@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:24:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:25:09+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
#1 [ROOT]/components/com_jgive/jgive.php(118): Joomla\CMS\MVC\Controller\BaseController->execute()
#2 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#4 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#5 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#6 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#7 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#8 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#9 [ROOT]/index.php(51): require_once('...')
#10 {main}
2025-12-08T09:25:09+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
#1 [ROOT]/components/com_jgive/jgive.php(118): Joomla\CMS\MVC\Controller\BaseController->execute()
#2 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#4 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#5 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#6 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#7 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#8 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#9 [ROOT]/index.php(51): require_once('...')
#10 {main}
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: 
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: Tony Stark <rohit.kodam@techburner1.com>
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New User Details
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:25:36 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <xe2sqDyJdPy53RVnOi0dW9M409Zq31JkcP6z6AgOc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8


2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: 
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: Tony Stark <rohit.kodam@techburner1.com>
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New User Details
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:25:36 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <TzhHo5N2U0v8GpT4HDO51s4k3CwTWTEFWzed7lUEYA@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8


2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:25:36+00:00	WARNING 127.0.0.1	jerror	Could not instantiate mail function.
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner1.com
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Account details for Admin
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:25:36 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <3dKX4B8mE23ggDoeSRbjXf7LYBQVgenf5Qh4YQTrWs@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8


2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner1.com
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Account details for Admin
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:25:36 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <wUNq8IsVSRNhoSNSKEUhdz60Spv4Se1TDYmgT6x1Jc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8


2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:25:36+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:25:36+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type PHPMailer\PHPMailer\Exception thrown with message "Could not instantiate mail function.". Stack trace: #0 [ROOT]/libraries/vendor/phpmailer/phpmailer/src/PHPMailer.php(1749): PHPMailer\PHPMailer\PHPMailer->mailSend()
#1 [ROOT]/libraries/vendor/phpmailer/phpmailer/src/PHPMailer.php(1564): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 [ROOT]/libraries/src/Mail/Mail.php(172): PHPMailer\PHPMailer\PHPMailer->send()
#3 [ROOT]/libraries/src/Mail/Mail.php(669): Joomla\CMS\Mail\Mail->Send()
#4 [ROOT]/components/com_jgive/models/registration.php(279): Joomla\CMS\Mail\Mail->sendMail()
#5 [ROOT]/administrator/components/com_jgive/models/registration.php(44): JgiveModelregistration->SendMailNewUser()
#6 [ROOT]/components/com_jgive/includes/individual.php(564): JgiveModeluserRegistration->store()
#7 [ROOT]/administrator/components/com_jgive/controllers/individual.php(114): JGiveIndividual->addIndividualDonor()
#8 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerIndividual->save()
#9 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#11 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#12 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#13 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#14 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#15 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#16 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#17 [ROOT]/administrator/index.php(32): require_once('...')
#18 {main}
2025-12-08T09:31:32+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "jFile" not found". Stack trace: #0 [ROOT]/administrator/components/com_tjvendors/controllers/vendor.php(114): TjvendorsModelVendor->generateGatewayFields()
#1 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): TjvendorsControllerVendor->generateGatewayFields()
#2 [ROOT]/administrator/components/com_tjvendors/tjvendors.php(47): Joomla\CMS\MVC\Controller\BaseController->execute()
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#5 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#7 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#8 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#9 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#10 [ROOT]/administrator/index.php(32): require_once('...')
#11 {main}
2025-12-08T09:31:43+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "jFile" not found". Stack trace: #0 [ROOT]/administrator/components/com_tjvendors/controllers/vendor.php(114): TjvendorsModelVendor->generateGatewayFields()
#1 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): TjvendorsControllerVendor->generateGatewayFields()
#2 [ROOT]/administrator/components/com_tjvendors/tjvendors.php(47): Joomla\CMS\MVC\Controller\BaseController->execute()
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#5 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#7 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#8 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#9 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#10 [ROOT]/administrator/index.php(32): require_once('...')
#11 {main}
2025-12-08T09:32:07+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
#1 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#2 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#4 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#5 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#7 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#8 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#9 [ROOT]/administrator/index.php(32): require_once('...')
#10 {main}
2025-12-08T09:32:12+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
#1 [ROOT]/administrator/components/com_jgive/jgive.php(126): Joomla\CMS\MVC\Controller\BaseController->execute()
#2 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#4 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#5 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#7 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#8 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#9 [ROOT]/administrator/index.php(32): require_once('...')
#10 {main}
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?New_campaign_"Test1"_is_created_successfully__o?=
 =?us-ascii?Q?n_Admin?=
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:32:12 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <MfamUhBTPcHDqsURmKeeNKudqwxnR69XxNnRyIr4pHQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?New_campaign_"Test1"_is_created_successfully__o?=
 =?us-ascii?Q?n_Admin?=
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:32:12 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <B0ga4ESPwvabXKwFWokKupNnGIKnwDjx1iOWMvpORQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_campaign_"Test1"_is_created_successfully__?=
 =?us-ascii?Q?on_Admin?=
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:32:12 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <4kRsB9BlAazkOuRHIBVnZ5HYCN7tKP6gwWLh2zNw@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_campaign_"Test1"_is_created_successfully__?=
 =?us-ascii?Q?on_Admin?=
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Mon, 8 Dec 2025 09:32:12 +0000
From: Admin <rohit.kodam@tekditechnologise.com>
Message-ID: <hhwzbky6Sm0JsrYgAuU8sT8CLQVH7cwhYlc7vZxUU@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologise.com
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-08T09:32:12+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
