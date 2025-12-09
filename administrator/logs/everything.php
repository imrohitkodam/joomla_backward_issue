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
2025-12-09T04:52:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JLikeViewPathUsers::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/components/com_jlike/views/pathusers/tmpl/default.php(14): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include('...')
#3 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#4 [ROOT]/components/com_jlike/views/pathusers/view.html.php(80): Joomla\CMS\MVC\View\HtmlView->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JLikeViewPathUsers->display()
#6 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#7 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#8 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#9 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#11 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#12 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#13 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#14 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#15 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#16 [ROOT]/index.php(51): require_once('...')
#17 {main}
2025-12-09T04:52:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JLikeViewPathUsers::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/components/com_jlike/views/pathusers/tmpl/default.php(14): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include('...')
#3 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#4 [ROOT]/components/com_jlike/views/pathusers/view.html.php(80): Joomla\CMS\MVC\View\HtmlView->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JLikeViewPathUsers->display()
#6 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#7 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#8 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#9 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#11 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#12 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#13 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#14 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#15 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#16 [ROOT]/index.php(51): require_once('...')
#17 {main}
2025-12-09T04:52:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JLikeViewPathUsers::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/components/com_jlike/views/pathusers/tmpl/default.php(14): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include('...')
#3 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#4 [ROOT]/components/com_jlike/views/pathusers/view.html.php(80): Joomla\CMS\MVC\View\HtmlView->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JLikeViewPathUsers->display()
#6 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#7 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#8 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#9 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#11 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#12 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#13 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#14 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#15 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#16 [ROOT]/index.php(51): require_once('...')
#17 {main}
2025-12-09T04:52:23+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:52:23+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T04:52:26+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JLikeViewtodos::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/components/com_jlike/views/todos/view.html.php(119): Joomla\CMS\MVC\View\HtmlView->display()
#3 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JLikeViewtodos->display()
#4 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#6 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#7 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#8 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#9 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#10 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#11 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#12 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#13 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#14 [ROOT]/index.php(51): require_once('...')
#15 {main}
2025-12-09T04:52:31+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:52:31+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T04:52:34+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JlikeViewpathdetail::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JlikeViewpathdetail->display()
#1 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#2 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#3 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#5 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#6 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#7 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#8 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#9 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#10 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#11 [ROOT]/index.php(51): require_once('...')
#12 {main}
2025-12-09T04:53:04+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:53:04+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T04:53:31+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JlikeViewpathdetail::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JlikeViewpathdetail->display()
#1 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#2 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#3 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#5 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#6 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#7 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#8 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#9 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#10 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#11 [ROOT]/index.php(51): require_once('...')
#12 {main}
2025-12-09T04:53:45+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JLikeViewtodos::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/components/com_jlike/views/todos/view.html.php(119): Joomla\CMS\MVC\View\HtmlView->display()
#3 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JLikeViewtodos->display()
#4 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#6 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#7 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#8 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#9 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#10 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#11 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#12 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#13 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#14 [ROOT]/index.php(51): require_once('...')
#15 {main}
2025-12-09T04:58:05+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T04:58:05+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:58:07+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T04:58:07+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:59:07+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T04:59:52+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:59:52+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T04:59:53+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T04:59:53+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:59:54+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T04:59:54+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T04:59:55+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T04:59:55+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T04:59:55+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T04:59:59+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T04:59:59+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:00:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:00:17+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:00:30+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:00:30+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:00:30+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:00:30+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:00:30+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:00:30+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:00:37+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:00:37+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:00:40+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:00:41+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:00:41+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:00:41+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:00:43+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:00:51+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:00:51+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:00:52+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:00:52+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:01:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:07+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:19+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:01:19+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:01:19+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:01:19+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:01:21+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:22+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:22+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:22+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:23+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:53+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:57+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?New_campaign_"Test11111"_is_created_successfull?=
 =?us-ascii?Q?y__on_Admin?=
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:01:57 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <xc83TbsVxwDISOP2ATLGbFY2UuRDlWgTnljXm2eS3g@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?New_campaign_"Test11111"_is_created_successfull?=
 =?us-ascii?Q?y__on_Admin?=
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:01:57 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <upbP1QpKiqiZA8XGkZm5ONN0J6K4FewUZAuipdgRDg@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_campaign_"Test11111"_is_created_successful?=
 =?us-ascii?Q?ly__on_Admin?=
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:01:57 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <NV0FzXoT6iIQe5YwK7oW9AR7bUSNtn7mAojqlRmEu0@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_campaign_"Test11111"_is_created_successful?=
 =?us-ascii?Q?ly__on_Admin?=
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:01:57 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <jLi9CoePdyTfarr1sqV2JFb2uvWfjW9IlQ4oqmZ9Rc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:01:57+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:02:02+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:02:02+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:02:03+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:02:03+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:02:45+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JLikeViewPathUsers::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/components/com_jlike/views/pathusers/tmpl/default.php(14): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include('...')
#3 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#4 [ROOT]/components/com_jlike/views/pathusers/view.html.php(80): Joomla\CMS\MVC\View\HtmlView->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JLikeViewPathUsers->display()
#6 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#7 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#8 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#9 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#11 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#12 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#13 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#14 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#15 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#16 [ROOT]/index.php(51): require_once('...')
#17 {main}
2025-12-09T05:02:53+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JLikeViewPathUsers::getApplication()". Stack trace: #0 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include()
#1 [ROOT]/components/com_jlike/views/pathusers/tmpl/default.php(14): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#2 [ROOT]/libraries/src/MVC/View/HtmlView.php(416): include('...')
#3 [ROOT]/libraries/src/MVC/View/HtmlView.php(204): Joomla\CMS\MVC\View\HtmlView->loadTemplate()
#4 [ROOT]/components/com_jlike/views/pathusers/view.html.php(80): Joomla\CMS\MVC\View\HtmlView->display()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JLikeViewPathUsers->display()
#6 [ROOT]/components/com_jlike/controller.php(47): Joomla\CMS\MVC\Controller\BaseController->display()
#7 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JLikeController->display()
#8 [ROOT]/components/com_jlike/jlike.php(109): Joomla\CMS\MVC\Controller\BaseController->execute()
#9 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#11 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#12 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#13 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#14 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#15 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#16 [ROOT]/index.php(51): require_once('...')
#17 {main}
2025-12-09T05:05:11+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:05:11+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:05:13+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:11:05+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:11:05+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:11:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:11:06+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:11:08+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:14:59+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:14:59+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:16:19+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getCity()
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
2025-12-09T05:16:19+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JGiveControllerCampaign::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JGiveControllerCampaign->getState()
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
2025-12-09T05:18:44+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:18:53+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to undefined method JgiveControllerDonations::getInput()". Stack trace: #0 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->getRoundedValue()
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
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0001" on "Admin"
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:20:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <azDN5UVaAL3VcPoa6OdpM350cQ503Q0qbWWmfB4MA@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0001" on "Admin"
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:20:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <LfnjYfe24uEdi7aQ1wjaQBtxroGK78BnCjJtJtdE@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0001_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:20:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <aSi9t3J3QymTJqjmshuFTThYMMZ6tdCNcnq4LmU@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0001_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:20:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <kKJL8IwCVNHEOxEBoXmcSBmbAxjrAXCytwwWMXbKg@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0001 on Admin
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:20:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <oQWVV88Q7Q3dEXb0kiFveqOXSzNRXHVrnFirBSZc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0001 on Admin
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:20:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <Q6sgMVdvY9muwqCKNlGuBgCxvymYJd5a5YHLPHZ8DI4@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:20:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:20:00+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to a member function getInput() on null". Stack trace: #0 [ROOT]/libraries/src/Plugin/CMSPlugin.php(386): PlgActionlogJgive->onAfterJGPaymentStatusProcess()
#1 [ROOT]/libraries/vendor/joomla/event/src/Dispatcher.php(454): Joomla\CMS\Plugin\CMSPlugin->Joomla\CMS\Plugin\{closure}()
#2 [ROOT]/libraries/src/Application/EventAware.php(111): Joomla\Event\Dispatcher->dispatch()
#3 [ROOT]/components/com_jgive/models/donations.php(1095): Joomla\CMS\Application\WebApplication->triggerEvent()
#4 [ROOT]/components/com_jgive/controllers/donations.php(539): JgiveModelDonations->addOrder()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->placeOrder()
#6 [ROOT]/components/com_jgive/jgive.php(118): Joomla\CMS\MVC\Controller\BaseController->execute()
#7 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#8 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#9 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#10 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#11 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#12 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#13 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#14 [ROOT]/index.php(51): require_once('...')
#15 {main}
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0002" on "Admin"
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:21:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <QRZyONWRm7kHEpqRnopiT5pEE8ICUncLCJvNzs00@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0002" on "Admin"
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:21:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <tagtVvhj07Rgl4Ah6EHtN6dbcy0Jx8FzDT1pWwjPLSs@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0002_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:21:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <xCT7Fs6AlHK7iGMWHHXKw6zstdkSLhjhCqaJOR4U@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0002_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:21:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <GJdeYLrrWBgQEBH3DEayksnaWU2EpsVXlST25iv31Yg@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0002 on Admin
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:21:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <QyhUpW8T8Ja7TIgMQNKovHH062ZUTctaHt4lqMbI@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0002 on Admin
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:21:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <hg7CUQdXdLAA3IeeBIFxHQlRSSGYmU9AB0exGo3zwY@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:21:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0003" on "Admin"
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:22:45 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <xSXBkx3TJj5Vs5hgPGMA0w26jlj2DRpvhNVdrnUPs@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0003" on "Admin"
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:22:45 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <G0PBAZV1T2r3QnTdAioLT3JXXIXeYRtr2o5r6EztOQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0003_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:22:45 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <XwdxC5YQtb5ZDfkgCXaTBbcZBD0tH6kxYF7gJ2Vsmes@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0003_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:22:45 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <nqbtDRiw5J5XR5Kk6SjHeRqaBCZvJ3FtyyupBjBY@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0003 on Admin
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:22:45 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <J95K6pV4oMsgkml2mfivnV5QjW9fDpcs5Ao6Kvw7DI@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0003 on Admin
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:22:45 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <xMgHbmdF01rpRhQg9RR8Rkzxn6SCVBBFrmj5M615lQc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:22:45+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:22:46+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "Text" not found". Stack trace: #0 [ROOT]/plugins/payment/paypal/paypal.php(108): include()
#1 [ROOT]/plugins/payment/paypal/paypal.php(174): PlgPaymentPaypal->buildLayout()
#2 [ROOT]/libraries/src/Plugin/CMSPlugin.php(386): PlgPaymentPaypal->onTP_GetHTML()
#3 [ROOT]/libraries/vendor/joomla/event/src/Dispatcher.php(454): Joomla\CMS\Plugin\CMSPlugin->Joomla\CMS\Plugin\{closure}()
#4 [ROOT]/libraries/src/Application/EventAware.php(111): Joomla\Event\Dispatcher->dispatch()
#5 [ROOT]/components/com_jgive/models/donations.php(1366): Joomla\CMS\Application\WebApplication->triggerEvent()
#6 [ROOT]/components/com_jgive/controllers/donations.php(217): JgiveModelDonations->getHTML()
#7 [ROOT]/components/com_jgive/controllers/donations.php(573): JgiveControllerDonations->getHTML()
#8 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->placeOrder()
#9 [ROOT]/components/com_jgive/jgive.php(118): Joomla\CMS\MVC\Controller\BaseController->execute()
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#11 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#12 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#13 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#14 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#15 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#16 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#17 [ROOT]/index.php(51): require_once('...')
#18 {main}
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0004" on "Admin"
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:23:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <pkRBZrKelbmMtfsixhwgg19mr5abkix2HcBfpGu2A@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0004" on "Admin"
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:23:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <gGVuz4fwYzV8rnA31Z8XLrYT5ZORW3arPWsu0VPjjGY@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0004_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:23:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <KU7LqxvUzFyg6RnuGXgyynf5RPAK2t3Vn8GjfGxovhI@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0004_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:23:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <plrRmLSV9fpJA2ZGTwvMF3mxtNUE4oaertCZFzIyiU@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0004 on Admin
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:23:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <bGhXsRcG0hlLsATuI8Si9hEFzsciaFyqQD3ZTld2nLI@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0004 on Admin
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:23:00 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <zg13uuE0Ow6JKkluUB6yGa1XzHsPSMLjUmTvuwFq80@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:23:00+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:23:01+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "Text" not found". Stack trace: #0 [ROOT]/plugins/payment/paypal/paypal.php(108): include()
#1 [ROOT]/plugins/payment/paypal/paypal.php(174): PlgPaymentPaypal->buildLayout()
#2 [ROOT]/libraries/src/Plugin/CMSPlugin.php(386): PlgPaymentPaypal->onTP_GetHTML()
#3 [ROOT]/libraries/vendor/joomla/event/src/Dispatcher.php(454): Joomla\CMS\Plugin\CMSPlugin->Joomla\CMS\Plugin\{closure}()
#4 [ROOT]/libraries/src/Application/EventAware.php(111): Joomla\Event\Dispatcher->dispatch()
#5 [ROOT]/components/com_jgive/models/donations.php(1366): Joomla\CMS\Application\WebApplication->triggerEvent()
#6 [ROOT]/components/com_jgive/controllers/donations.php(217): JgiveModelDonations->getHTML()
#7 [ROOT]/components/com_jgive/controllers/donations.php(573): JgiveControllerDonations->getHTML()
#8 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->placeOrder()
#9 [ROOT]/components/com_jgive/jgive.php(118): Joomla\CMS\MVC\Controller\BaseController->execute()
#10 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#11 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#12 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#13 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#14 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#15 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#16 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#17 [ROOT]/index.php(51): require_once('...')
#18 {main}
2025-12-09T05:24:07+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Joomla\CMS\Router\Exception\RouteNotFoundException thrown with message "Page not found". Stack trace: #0 [ROOT]/libraries/src/Application/SiteApplication.php(761): Joomla\CMS\Router\Router->parse()
#1 [ROOT]/libraries/src/Application/SiteApplication.php(243): Joomla\CMS\Application\SiteApplication->route()
#2 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#3 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#4 [ROOT]/index.php(51): require_once('...')
#5 {main}
2025-12-09T05:24:07+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Joomla\CMS\Router\Exception\RouteNotFoundException thrown with message "Page not found". Stack trace: #0 [ROOT]/libraries/src/Application/SiteApplication.php(761): Joomla\CMS\Router\Router->parse()
#1 [ROOT]/libraries/src/Application/SiteApplication.php(243): Joomla\CMS\Application\SiteApplication->route()
#2 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#3 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#4 [ROOT]/index.php(51): require_once('...')
#5 {main}
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0005" on "Admin"
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:03 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <i1hZkro62y2bE7jvRbT3EfZduNuhMHFqUtY7RF0I@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0005" on "Admin"
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:03 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <Ds4tvb2Lcgee8ficIZllcn2z3EmIRROTmfkFoOA@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0005_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:03 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <cIDCe1tWkckuD9fyHGuV6ET1l2FYmZglSX0uHoKNQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0005_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:03 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <nN4ye0uvWkCEVbduW3FQoA8CSUfeu0CymYtWqun57RA@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0005 on Admin
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:03 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <BLCMrovkh0aajKCcmDSCBJLtD0QFdTWq303HWjMNw4@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0005 on Admin
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:03 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <R25vMVazGVOniuV9H1kW2UznHwYwJnpbCCeF2YQ3ow@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:03+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0006" on "Admin"
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:26 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <6j0BVytVf7QPZeDzI33S4rF8GNiFCmNQhbmw9uGP4@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0006" on "Admin"
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:26 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <PJd6dkiXrhekbKj8FP8zpy9LQyaRzgZNQC6nkaSBgk@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0006_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:26 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <VRkMlHyXSH5sZxIzIoZCnlYHnO3hRSdm0ToK9x2XguA@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0006_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:26 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <sdKEu5bbkPFabfBQxx6kUpZJ2ILFmLMJcyPX92PpM@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0006 on Admin
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:26 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <mbtLRgDSSXS1rTpLrt95HujQ45EfWP0NWyJ6hSASQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0006 on Admin
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:25:26 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <tJXt02uAX8ReFP3DnpEQMuSfGOo3jrETKOxFxsiyYQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:25:26+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0007" on "Admin"
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:31:40 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <Z8HOJ7UYWMBKer3WI9bd4gPfdnhYXuYnlKz0sZSv38@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0007" on "Admin"
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:31:40 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <v7ZBZxolhdsUr9qVaMrECnnjxnemdDUjKL1sgww1sOc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0007_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:31:40 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <H9SzVgvQa0jo5MCp0Wo6uGiK1SfCrWVTT7XeOwc2N4@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0007_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:31:40 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <BWf6sOU4WSn4MhKNKs5OqMqbjAwslcYM2uEdcYeIS5Y@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0007 on Admin
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:31:40 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <IssdJtdOuZfYrj9S08m1hxF3Lz20mxZoJXnfifaz0@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0007 on Admin
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:31:40 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <B76Jq1zAG0Gv4UGwT8sdcfkU1J8Ic1aqjBSNW5d8FdM@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:31:40+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0008" on "Admin"
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:05 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <8voVsHfJOOKVpG7WxHm2apul5XYsxaQi3ny1Hjki8M@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0008" on "Admin"
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:05 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <Wy3oXX9CTco02rav9AvuHeRcMTTCeVbW8Bu9YnUp8@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0008_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:05 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <mTrmbtDbtgvV1bRtNs1DMbW2JwN5PZdt1DYPai484@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0008_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:05 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <XSGIjdQSLjl3IvedwH75KecqatCOBZT00B7Iti2ms@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0008 on Admin
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:05 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <ERlPxQobV8QstZWvEyQlQRTFBH8zqRAD5Kb228ffSY@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0008 on Admin
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:05 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <lNXRPs25ZteSHRV6JI1nFLmj5RkJQe3tIE8gsrLPEA@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:05+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:05+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "Facory" not found". Stack trace: #0 [ROOT]/libraries/src/Plugin/CMSPlugin.php(386): PlgActionlogJgive->onAfterJGPaymentStatusProcess()
#1 [ROOT]/libraries/vendor/joomla/event/src/Dispatcher.php(454): Joomla\CMS\Plugin\CMSPlugin->Joomla\CMS\Plugin\{closure}()
#2 [ROOT]/libraries/src/Application/EventAware.php(111): Joomla\Event\Dispatcher->dispatch()
#3 [ROOT]/components/com_jgive/models/donations.php(1095): Joomla\CMS\Application\WebApplication->triggerEvent()
#4 [ROOT]/components/com_jgive/controllers/donations.php(539): JgiveModelDonations->addOrder()
#5 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JgiveControllerDonations->placeOrder()
#6 [ROOT]/components/com_jgive/jgive.php(118): Joomla\CMS\MVC\Controller\BaseController->execute()
#7 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#8 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#9 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#10 [ROOT]/libraries/src/Application/SiteApplication.php(217): Joomla\CMS\Component\ComponentHelper::renderComponent()
#11 [ROOT]/libraries/src/Application/SiteApplication.php(271): Joomla\CMS\Application\SiteApplication->dispatch()
#12 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\SiteApplication->doExecute()
#13 [ROOT]/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#14 [ROOT]/index.php(51): require_once('...')
#15 {main}
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0009" on "Admin"
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:23 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <ZPfHBiwyVJ8pB7Ab4sepo10QVa4rJkfxYl67WL15WUg@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-0009" on "Admin"
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:23 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <YitmIDoS07T3T5AICPIACGWibaeY37uPw8fa1wOXM@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0009_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:23 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <MWWXp0qG2UxLCcPexRuroHvmpXNhubFprcqpXhIGY@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-0009_on_Admin_is_being_proc?=
 =?us-ascii?Q?essed?=
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:23 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <flSAcdxFkmyJoebpU51wXWYdPLs7dH8iS8KneA1k@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0009 on Admin
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:23 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <cX78Ds7HhAQre0tB56vmImChfoB5bL15Es9KleEQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-0009 on Admin
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:34:23 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <ouEOasBDbYrob4n48WRuz6jFy6c9JCyhbpzTKAIp3w@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:34:23+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-00010" on "Admin"
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:02 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <yN27ONcAuQ0b8FlHMWlGtZSNMToILyFQPtoo4SvGLB0@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-00010" on "Admin"
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:02 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <HXZv15Hn6xE5kK28gyuD0XaIDatFZA8cv0XoIGMFc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-00010_on_Admin_is_being_pro?=
 =?us-ascii?Q?cessed?=
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:02 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <aUfxmUiyMFtHcAqyekTADT8sHvDPLwHBX2x9Iti3Dc@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-00010_on_Admin_is_being_pro?=
 =?us-ascii?Q?cessed?=
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:02 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <0l8Am7t3bV3qDkTaCeET0PZMDiSeC9FJqc66vLL0ZQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-00010 on Admin
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:02 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <vEOZkQroG4BAwlgQVwywCwhZRjFOupS20peirem3G5M@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-00010 on Admin
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:02 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <lGMEYCMV4hT5JamlDcheDnKHMvOy4JtAUWFjT93u35c@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:02+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-00011" on "Admin"
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <HOhUEj4yA0zTNFGwq86s9MngS456FNlxLAaivbV8gk@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-00011" on "Admin"
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <0B6OcONqySogzqcGF5vsf7IxZy6CUXTToq9b93nQwD0@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-00011_on_Admin_is_being_pro?=
 =?us-ascii?Q?cessed?=
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <GJ7ZKLmKiC9EsUUCJQiyjdPx5EH9VhNYT1TqPLeM4@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-00011_on_Admin_is_being_pro?=
 =?us-ascii?Q?cessed?=
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <5xRiWeFqcHVrypbjnC9PDCaF9eP16Rbo70nWDGGZ4E@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-00011 on Admin
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <KYHniW1aaWVcVpkBypOrpplQinYcmzhjsDxpfKmvJM@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-00011 on Admin
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:43 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <sNgD1Qo4JRk1oXEzZvTTbFJjec8078qBf3Sagt7vY@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:43+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-00011" on "Admin"
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:54 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <lZjIRdvx3rfBAOYhSupA3vInVUs0PvzFzlmFvdnX0@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: Update for "Donation JGOID-00011" on "Admin"
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:54 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <2XwEQKIzwvDr2SoI6Btj9d2Q9ICBdji7O1njqg8Pw@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-00011_on_Admin_is_being_pro?=
 =?us-ascii?Q?cessed?=
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:54 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <cgstpWAHEN2ly3LWBRbud7JWZTf0k77C69swtAerOL8@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@techburner.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: =?us-ascii?Q?Your_Donation_JGOID-00011_on_Admin_is_being_pro?=
 =?us-ascii?Q?cessed?=
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:54 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <MLJgkUIsjxCWDKpCrWfkR4718EaYTFOEPyfjTGqgNE@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-00011 on Admin
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:54 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <8kNZk7IynALW9Zdodpc7eYZ3o7IKMFH4vac3JUcQ@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sending with mail()
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Sendmail path: /usr/sbin/sendmail -t -i
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Envelope sender: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: To: rohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Subject: New Donation JGOID-00011 on Admin
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Headers: Date: Tue, 9 Dec 2025 05:35:54 +0000
From: Admin <rohit.kodam@tekditechnologies.com>
Message-ID: <XYkDNL96zkbw7Lblvq9yvkOidyVKq0lM2T0MWHDmoo@ttpl-rt-234-php83.local>
MIME-Version: 1.0
Content-Type: text/html; charset=utf-8


2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Additional params: -frohit.kodam@tekditechnologies.com
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Result: false
2025-12-09T05:35:54+00:00	ERROR 127.0.0.1	mail	Error in Mail API: Could not instantiate mail function.
2025-12-09T05:38:53+00:00	INFO 127.0.0.1	updater	Loading information from update site #2 with name "Accredited Joomla! Translations" and URL https://update.joomla.org/language/translationlist_6.xml took 0.08 seconds
2025-12-09T05:38:53+00:00	INFO 127.0.0.1	updater	Loading information from update site #3 with name "Joomla! Update Component" and URL https://update.joomla.org/core/extensions/com_joomlaupdate.xml took 0.08 seconds
2025-12-09T05:38:54+00:00	INFO 127.0.0.1	updater	Loading information from update site #2 with name "Accredited Joomla! Translations" and URL https://update.joomla.org/language/translationlist_6.xml took 0.07 seconds
2025-12-09T05:38:54+00:00	INFO 127.0.0.1	updater	Loading information from update site #3 with name "Joomla! Update Component" and URL https://update.joomla.org/core/extensions/com_joomlaupdate.xml took 0.06 seconds
2025-12-09T05:38:55+00:00	INFO 127.0.0.1	updater	Loading information from update site #4 with name "JGive" and URL https://techjoomla.com/updates/stream/jgive.xml?format=xml took 1.38 seconds
2025-12-09T05:38:55+00:00	INFO 127.0.0.1	updater	Loading information from update site #4 with name "JGive" and URL https://techjoomla.com/updates/stream/jgive.xml?format=xml took 1.07 seconds
2025-12-09T06:45:52+00:00	INFO 127.0.0.1	updater	Loading information from update site #2 with name "Accredited Joomla! Translations" and URL https://update.joomla.org/language/translationlist_6.xml took 0.08 seconds
2025-12-09T06:45:52+00:00	INFO 127.0.0.1	updater	Loading information from update site #3 with name "Joomla! Update Component" and URL https://update.joomla.org/core/extensions/com_joomlaupdate.xml took 0.08 seconds
2025-12-09T06:45:53+00:00	INFO 127.0.0.1	updater	Loading information from update site #4 with name "JGive" and URL https://techjoomla.com/updates/stream/jgive.xml?format=xml took 1.38 seconds
