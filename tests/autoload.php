<?php
require dirname(__DIR__) . '/src/autoload.php';

spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'httpclienttest' => '/unit/WindowsAzure/Core/HttpClientTest.php',
            'invalidargumenttypeexceptiontest' => '/unit/WindowsAzure/Core/InvalidArgumentTypeExceptionTest.php',
            'pear2\\tests\\framework\\blobrestproxytestbase' => '/framework/BlobRestProxyTestBase.php',
            'pear2\\tests\\framework\\queuerestproxytestbase' => '/framework/QueueRestProxyTestBase.php',
            'pear2\\tests\\framework\\restproxytestbase' => '/framework/ServiceRestProxyTestBase.php',
            'pear2\\tests\\framework\\tablerestproxytestbase' => '/framework/TableRestProxyTestBase.php',
            'pear2\\tests\\framework\\testresources' => '/framework/TestResources.php',
            'pear2\\tests\\mock\\windowsazure\\services\\core\\authentication\\sharedkeyauthenticationschememock' => '/mock/WindowsAzure/Services/Core/Authentication/SharedKeyAuthenticationSchemeMock.php',
            'pear2\\tests\\mock\\windowsazure\\services\\core\\authentication\\storageauthenticationschememock' => '/mock/WindowsAzure/Services/Core/Authentication/StorageAuthenticationSchemeMock.php',
            'pear2\\tests\\mock\\windowsazure\\services\\core\\authentication\\tablesharedkeyauthenticationschememock' => '/mock/WindowsAzure/Services/Core/Authentication/TableSharedKeyAuthenticationSchemeMock.php',
            'pear2\\tests\\mock\\windowsazure\\services\\core\\filters\\simplefiltermock' => '/mock/WindowsAzure/Services/Core/Filters/SimpleFilterMock.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\blobrestproxytest' => '/unit/WindowsAzure/Services/Blob/BlobRestProxyTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\blobservicetest' => '/unit/WindowsAzure/Services/Blob/BlobServiceTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\accessconditionheadertypetest' => '/unit/WindowsAzure/Services/Blob/Models/AccessConditionHeaderTypeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\accessconditiontest' => '/unit/WindowsAzure/Services/Blob/Models/AccessConditionTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\accesspolicytest' => '/unit/WindowsAzure/Services/Blob/Models/AccessPolicyTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\acquireleaseoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/AcquireLeaseOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\acquireleaseresulttest' => '/unit/WindowsAzure/Services/Blob/Models/AcquireLeaseResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\blobblocktypetest' => '/unit/WindowsAzure/Services/Blob/Models/BlobBlockTypeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\blobprefixtest' => '/unit/WindowsAzure/Services/Blob/Models/BlobPrefixTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\blobpropertiestest' => '/unit/WindowsAzure/Services/Blob/Models/BlobPropertiesTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\blobserviceoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/BlobServiceOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\blobtest' => '/unit/WindowsAzure/Services/Blob/Models/BlobTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\blobtypetest' => '/unit/WindowsAzure/Services/Blob/Models/BlobTypeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\blocklisttest' => '/unit/WindowsAzure/Services/Blob/Models/BlockListTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\commitblobblocksoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CommitBlobBlocksOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\containeracltest' => '/unit/WindowsAzure/Services/Blob/Models/ContainerACLTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\containerpropertiestest' => '/unit/WindowsAzure/Services/Blob/Models/ContainerPropertiesTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\containertest' => '/unit/WindowsAzure/Services/Blob/Models/ContainerTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\createblobblockoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobBlockOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\createbloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\createblobpagesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobPagesOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\createblobpagesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobPagesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\createcontaineroptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateContainerOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\deletebloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/DeleteBlobOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getblobmetadataoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobMetadataOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getblobmetadataresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobMetadataResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getbloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getblobpropertiesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobPropertiesOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getblobpropertiesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobPropertiesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getblobresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getcontaineraclresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetContainerACLResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\getcontainerpropertiesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetContainerPropertiesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\leasemodetest' => '/unit/WindowsAzure/Services/Blob/Models/LeaseModeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listblobblocksoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobBlocksOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listblobblocksresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobBlocksResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listbloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobsOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listblobresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobsResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listcontainersoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListContainersOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listcontainersresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListContainersResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listpageblobrangesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListPageBlobRangesOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\listpageblobrangesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListPageBlobRangesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\pagerangetest' => '/unit/WindowsAzure/Services/Blob/Models/PageRangeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\publicaccesstypetest' => '/unit/WindowsAzure/Services/Blob/Models/PublicAccessTypeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\setblobmetadataoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobMetadataOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\setblobmetadataresulttest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobMetadataResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\setblobpropertiesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobPropertiesOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\setblobpropertiesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobPropertiesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\setcontainermetadataoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/SetContainerMetadataOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\blob\\models\\signedidentifiertest' => '/unit/WindowsAzure/Services/Blob/Models/SignedIdentifierTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\authentication\\sharedkeyauthenticationschemetest' => '/unit/WindowsAzure/Services/Core/Authentication/SharedKeyAuthenticationSchemeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\authentication\\storageauthenticationschemetest' => '/unit/WindowsAzure/Services/Core/Authentication/StorageAuthenticationSchemeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\authentication\\tablesharedkeyauthenticationschemetest' => '/unit/WindowsAzure/Services/Core/Authentication/TableSharedKeyAuthenticationSchemeTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\configurationtest' => '/unit/WindowsAzure/Services/Core/ConfigurationTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\filters\\datefiltertest' => '/unit/WindowsAzure/Services/Core/Filters/DateFilterTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\filters\\headersfiltertest' => '/unit/WindowsAzure/Services/Core/Filters/HeadersFilterTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\models\\getservicepropertiesresulttest' => '/unit/WindowsAzure/Services/Core/Models/GetServicePropertiesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\models\\loggingtest' => '/unit/WindowsAzure/Services/Core/Models/LoggingTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\models\\metricstest' => '/unit/WindowsAzure/Services/Core/Models/MetricsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\models\\retentionpolicytest' => '/unit/WindowsAzure/Services/Core/Models/RetentionPolicyTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\models\\servicepropertiestest' => '/unit/WindowsAzure/Services/Core/Models/ServicePropertiesTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\core\\servicesbuildertest' => '/unit/WindowsAzure/Services/Core/ServicesBuilderTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\createmessageoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/CreateMessageOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\createqueueoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/CreateQueueOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\getqueuemetadataresulttest' => '/unit/WindowsAzure/Services/Queue/Models/GetQueueMetadataResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\listmessagesoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/ListMessagesOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\listmessagesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/ListMessagesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\listqueueoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/ListQueuesOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\listqueueresulttest' => '/unit/WindowsAzure/Services/Queue/Models/ListQueuesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\peekmessagesoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/PeekMessagesOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\peekmessagesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/PeekMessagesResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\queuemessagetest' => '/unit/WindowsAzure/Services/Queue/Models/QueueMessageTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\queueserviceoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/QueueServiceOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\queuetest' => '/unit/WindowsAzure/Services/Queue/Models/QueueTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\updatemessageresulttest' => '/unit/WindowsAzure/Services/Queue/Models/UpdateMessageResultTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\models\\windowsazurequeuemessagetest' => '/unit/WindowsAzure/Services/Queue/Models/WindowsAzureQueueMessageTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\queuerestproxytest' => '/unit/WindowsAzure/Services/Queue/QueueRestProxyTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\queue\\queueservicetest' => '/unit/WindowsAzure/Services/Queue/QueueServiceTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\table\\models\\tableserviceoptionstest' => '/unit/WindowsAzure/Services/Table/Models/TableServiceOptionsTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\table\\tablerestproxytest' => '/unit/WindowsAzure/Services/Table/TableRestProxyTest.php',
            'pear2\\tests\\unit\\windowsazure\\services\\table\\tableservicetest' => '/unit/WindowsAzure/Services/Table/TableServiceTest.php',
            'serviceexceptiontest' => '/unit/WindowsAzure/Core/ServiceExceptionTest.php',
            'servicerestproxytest' => '/unit/WindowsAzure/Services/Core/ServiceRestProxyTest.php',
            'sharedkeyfiltertest' => '/unit/WindowsAzure/Services/Core/Filters/SharedKeyFilterTest.php',
            'urltest' => '/unit/WindowsAzure/Core/UrlTest.php',
            'utilitiestest' => '/unit/WindowsAzure/UtilitiesTest.php',
            'validatetest' => '/unit/WindowsAzure/ValidateTest.php',
            'windowsazureutilitiestest' => '/unit/WindowsAzure/Core/WindowsAzureUtilitiesTest.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
