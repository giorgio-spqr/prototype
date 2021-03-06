<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd997264070b57f3eabc9c8e678a8f75
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '8fa1aa8cac6a43024fcfc5386df20ced' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Constants.php',
        'b8b48b5f3b620f647efc2110a0a0e913' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ezFunctions.php',
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'ezsql\\' => 6,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'B' => 
        array (
            'Bunny\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ezsql\\' => 
        array (
            0 => __DIR__ . '/..' . '/ezsql/ezsql/lib',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Bunny\\' => 
        array (
            0 => __DIR__ . '/..' . '/bunny/bunny/src/Bunny',
        ),
    );

    public static $classMap = array (
        'Bunny\\AbstractClient' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/AbstractClient.php',
        'Bunny\\Async\\Client' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Async/Client.php',
        'Bunny\\Channel' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Channel.php',
        'Bunny\\ChannelMethods' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ChannelMethods.php',
        'Bunny\\ChannelModeEnum' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ChannelModeEnum.php',
        'Bunny\\ChannelStateEnum' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ChannelStateEnum.php',
        'Bunny\\Client' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Client.php',
        'Bunny\\ClientMethods' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ClientMethods.php',
        'Bunny\\ClientStateEnum' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/ClientStateEnum.php',
        'Bunny\\Constants' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Constants.php',
        'Bunny\\Exception\\BufferUnderflowException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/BufferUnderflowException.php',
        'Bunny\\Exception\\BunnyException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/BunnyException.php',
        'Bunny\\Exception\\ChannelException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/ChannelException.php',
        'Bunny\\Exception\\ClientException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/ClientException.php',
        'Bunny\\Exception\\FrameEndInvalidException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/FrameEndInvalidException.php',
        'Bunny\\Exception\\InvalidClassException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/InvalidClassException.php',
        'Bunny\\Exception\\InvalidMethodException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/InvalidMethodException.php',
        'Bunny\\Exception\\ProtocolException' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Exception/ProtocolException.php',
        'Bunny\\Message' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Message.php',
        'Bunny\\Protocol\\AbstractFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/AbstractFrame.php',
        'Bunny\\Protocol\\Buffer' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/Buffer.php',
        'Bunny\\Protocol\\ContentBodyFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ContentBodyFrame.php',
        'Bunny\\Protocol\\ContentHeaderFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ContentHeaderFrame.php',
        'Bunny\\Protocol\\HeartbeatFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/HeartbeatFrame.php',
        'Bunny\\Protocol\\MethodAccessRequestFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodAccessRequestFrame.php',
        'Bunny\\Protocol\\MethodAccessRequestOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodAccessRequestOkFrame.php',
        'Bunny\\Protocol\\MethodBasicAckFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicAckFrame.php',
        'Bunny\\Protocol\\MethodBasicCancelFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicCancelFrame.php',
        'Bunny\\Protocol\\MethodBasicCancelOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicCancelOkFrame.php',
        'Bunny\\Protocol\\MethodBasicConsumeFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicConsumeFrame.php',
        'Bunny\\Protocol\\MethodBasicConsumeOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicConsumeOkFrame.php',
        'Bunny\\Protocol\\MethodBasicDeliverFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicDeliverFrame.php',
        'Bunny\\Protocol\\MethodBasicGetEmptyFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicGetEmptyFrame.php',
        'Bunny\\Protocol\\MethodBasicGetFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicGetFrame.php',
        'Bunny\\Protocol\\MethodBasicGetOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicGetOkFrame.php',
        'Bunny\\Protocol\\MethodBasicNackFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicNackFrame.php',
        'Bunny\\Protocol\\MethodBasicPublishFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicPublishFrame.php',
        'Bunny\\Protocol\\MethodBasicQosFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicQosFrame.php',
        'Bunny\\Protocol\\MethodBasicQosOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicQosOkFrame.php',
        'Bunny\\Protocol\\MethodBasicRecoverAsyncFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRecoverAsyncFrame.php',
        'Bunny\\Protocol\\MethodBasicRecoverFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRecoverFrame.php',
        'Bunny\\Protocol\\MethodBasicRecoverOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRecoverOkFrame.php',
        'Bunny\\Protocol\\MethodBasicRejectFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicRejectFrame.php',
        'Bunny\\Protocol\\MethodBasicReturnFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodBasicReturnFrame.php',
        'Bunny\\Protocol\\MethodChannelCloseFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelCloseFrame.php',
        'Bunny\\Protocol\\MethodChannelCloseOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelCloseOkFrame.php',
        'Bunny\\Protocol\\MethodChannelFlowFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelFlowFrame.php',
        'Bunny\\Protocol\\MethodChannelFlowOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelFlowOkFrame.php',
        'Bunny\\Protocol\\MethodChannelOpenFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelOpenFrame.php',
        'Bunny\\Protocol\\MethodChannelOpenOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodChannelOpenOkFrame.php',
        'Bunny\\Protocol\\MethodConfirmSelectFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConfirmSelectFrame.php',
        'Bunny\\Protocol\\MethodConfirmSelectOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConfirmSelectOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionBlockedFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionBlockedFrame.php',
        'Bunny\\Protocol\\MethodConnectionCloseFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionCloseFrame.php',
        'Bunny\\Protocol\\MethodConnectionCloseOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionCloseOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionOpenFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionOpenFrame.php',
        'Bunny\\Protocol\\MethodConnectionOpenOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionOpenOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionSecureFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionSecureFrame.php',
        'Bunny\\Protocol\\MethodConnectionSecureOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionSecureOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionStartFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionStartFrame.php',
        'Bunny\\Protocol\\MethodConnectionStartOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionStartOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionTuneFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionTuneFrame.php',
        'Bunny\\Protocol\\MethodConnectionTuneOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionTuneOkFrame.php',
        'Bunny\\Protocol\\MethodConnectionUnblockedFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodConnectionUnblockedFrame.php',
        'Bunny\\Protocol\\MethodExchangeBindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeBindFrame.php',
        'Bunny\\Protocol\\MethodExchangeBindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeBindOkFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeclareFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeclareFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeclareOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeclareOkFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeleteFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeleteFrame.php',
        'Bunny\\Protocol\\MethodExchangeDeleteOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeDeleteOkFrame.php',
        'Bunny\\Protocol\\MethodExchangeUnbindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeUnbindFrame.php',
        'Bunny\\Protocol\\MethodExchangeUnbindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodExchangeUnbindOkFrame.php',
        'Bunny\\Protocol\\MethodFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodFrame.php',
        'Bunny\\Protocol\\MethodQueueBindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueBindFrame.php',
        'Bunny\\Protocol\\MethodQueueBindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueBindOkFrame.php',
        'Bunny\\Protocol\\MethodQueueDeclareFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeclareFrame.php',
        'Bunny\\Protocol\\MethodQueueDeclareOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeclareOkFrame.php',
        'Bunny\\Protocol\\MethodQueueDeleteFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeleteFrame.php',
        'Bunny\\Protocol\\MethodQueueDeleteOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueDeleteOkFrame.php',
        'Bunny\\Protocol\\MethodQueuePurgeFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueuePurgeFrame.php',
        'Bunny\\Protocol\\MethodQueuePurgeOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueuePurgeOkFrame.php',
        'Bunny\\Protocol\\MethodQueueUnbindFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueUnbindFrame.php',
        'Bunny\\Protocol\\MethodQueueUnbindOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodQueueUnbindOkFrame.php',
        'Bunny\\Protocol\\MethodTxCommitFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxCommitFrame.php',
        'Bunny\\Protocol\\MethodTxCommitOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxCommitOkFrame.php',
        'Bunny\\Protocol\\MethodTxRollbackFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxRollbackFrame.php',
        'Bunny\\Protocol\\MethodTxRollbackOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxRollbackOkFrame.php',
        'Bunny\\Protocol\\MethodTxSelectFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxSelectFrame.php',
        'Bunny\\Protocol\\MethodTxSelectOkFrame' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/MethodTxSelectOkFrame.php',
        'Bunny\\Protocol\\ProtocolReader' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolReader.php',
        'Bunny\\Protocol\\ProtocolReaderGenerated' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolReaderGenerated.php',
        'Bunny\\Protocol\\ProtocolWriter' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolWriter.php',
        'Bunny\\Protocol\\ProtocolWriterGenerated' => __DIR__ . '/..' . '/bunny/bunny/src/Bunny/Protocol/ProtocolWriterGenerated.php',
        'ComposerAutoloaderInitcd997264070b57f3eabc9c8e678a8f75' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitcd997264070b57f3eabc9c8e678a8f75' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Project\\Controllers\\ApplicationsController' => __DIR__ . '/../..' . '/app/Controllers/ApplicationsController.php',
        'Project\\Controllers\\TasksController' => __DIR__ . '/../..' . '/app/Controllers/TasksController.php',
        'Project\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Project\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/Database/Connection.php',
        'Project\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Project\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Project\\Models\\Applications' => __DIR__ . '/../..' . '/app/Models/Applications.php',
        'Project\\Models\\DBModel' => __DIR__ . '/../..' . '/app/Models/DBModel.php',
        'Project\\Models\\Deals' => __DIR__ . '/../..' . '/app/Models/Deals.php',
        'Project\\Models\\Partners' => __DIR__ . '/../..' . '/app/Models/Partners.php',
        'Project\\Services\\Broker\\RabbitMQ' => __DIR__ . '/../..' . '/app/Services/Broker/RabbitMQ.php',
        'Project\\Services\\Email\\SendMail' => __DIR__ . '/../..' . '/app/Services/Email/SendMail.php',
        'Project\\Utils\\AskToDeal' => __DIR__ . '/../..' . '/app/Utils/SendOffer.php',
        'Project\\Utils\\OfferToDeal' => __DIR__ . '/../..' . '/app/Utils/SendOffer.php',
        'Project\\Utils\\SendOffer' => __DIR__ . '/../..' . '/app/Utils/SendOffer.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'React\\EventLoop\\ExtEvLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtEvLoop.php',
        'React\\EventLoop\\ExtEventLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtEventLoop.php',
        'React\\EventLoop\\ExtLibevLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtLibevLoop.php',
        'React\\EventLoop\\ExtLibeventLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtLibeventLoop.php',
        'React\\EventLoop\\ExtUvLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtUvLoop.php',
        'React\\EventLoop\\Factory' => __DIR__ . '/..' . '/react/event-loop/src/Factory.php',
        'React\\EventLoop\\LoopInterface' => __DIR__ . '/..' . '/react/event-loop/src/LoopInterface.php',
        'React\\EventLoop\\SignalsHandler' => __DIR__ . '/..' . '/react/event-loop/src/SignalsHandler.php',
        'React\\EventLoop\\StreamSelectLoop' => __DIR__ . '/..' . '/react/event-loop/src/StreamSelectLoop.php',
        'React\\EventLoop\\Tick\\FutureTickQueue' => __DIR__ . '/..' . '/react/event-loop/src/Tick/FutureTickQueue.php',
        'React\\EventLoop\\TimerInterface' => __DIR__ . '/..' . '/react/event-loop/src/TimerInterface.php',
        'React\\EventLoop\\Timer\\Timer' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timer.php',
        'React\\EventLoop\\Timer\\Timers' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timers.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
        'ezSQL_cubrid' => __DIR__ . '/..' . '/ezsql/ezsql/unsupported/lib/ez_sql_cubrid.php',
        'ezSQL_cubridTest' => __DIR__ . '/..' . '/ezsql/ezsql/unsupported/tests/cubrid/ezSQL_cubridTest.php',
        'ezSQL_oracle8_9' => __DIR__ . '/..' . '/ezsql/ezsql/unsupported/lib/ez_sql_oracle8_9.php',
        'ezSQL_oracle8_9Test' => __DIR__ . '/..' . '/ezsql/ezsql/unsupported/tests/oracle8_9/ezSQL_oracle8_9Test.php',
        'ezSQL_oracleTNS' => __DIR__ . '/..' . '/ezsql/ezsql/unsupported/lib/ez_sql_oracleTNS.php',
        'ezSQL_oracleTNSTest' => __DIR__ . '/..' . '/ezsql/ezsql/unsupported/tests/oracle8_9/ezSQL_oracleTNSTest_.php',
        'ezsql\\Config' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Config.php',
        'ezsql\\ConfigAbstract' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ConfigAbstract.php',
        'ezsql\\ConfigInterface' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ConfigInterface.php',
        'ezsql\\DInjector' => __DIR__ . '/..' . '/ezsql/ezsql/lib/DInjector.php',
        'ezsql\\Database' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Database.php',
        'ezsql\\DatabaseInterface' => __DIR__ . '/..' . '/ezsql/ezsql/lib/DatabaseInterface.php',
        'ezsql\\Database\\ez_mysqli' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Database/ez_mysqli.php',
        'ezsql\\Database\\ez_pdo' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Database/ez_pdo.php',
        'ezsql\\Database\\ez_pgsql' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Database/ez_pgsql.php',
        'ezsql\\Database\\ez_sqlite3' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Database/ez_sqlite3.php',
        'ezsql\\Database\\ez_sqlsrv' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Database/ez_sqlsrv.php',
        'ezsql\\Exception\\ContainerException' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Exception/ContainerException.php',
        'ezsql\\Exception\\NotFoundException' => __DIR__ . '/..' . '/ezsql/ezsql/lib/Exception/NotFoundException.php',
        'ezsql\\ezQuery' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ezQuery.php',
        'ezsql\\ezQueryInterface' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ezQueryInterface.php',
        'ezsql\\ezResultset' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ezResultset.php',
        'ezsql\\ezSchema' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ezSchema.php',
        'ezsql\\ezsqlModel' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ezsqlModel.php',
        'ezsql\\ezsqlModelInterface' => __DIR__ . '/..' . '/ezsql/ezsql/lib/ezsqlModelInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd997264070b57f3eabc9c8e678a8f75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd997264070b57f3eabc9c8e678a8f75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd997264070b57f3eabc9c8e678a8f75::$classMap;

        }, null, ClassLoader::class);
    }
}
