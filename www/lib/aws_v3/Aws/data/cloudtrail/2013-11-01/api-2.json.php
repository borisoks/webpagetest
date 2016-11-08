<?php
// This file was auto-generated from sdk-root/src/data/cloudtrail/2013-11-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2013-11-01', 'endpointPrefix' => 'cloudtrail', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'CloudTrail', 'serviceFullName' => 'AWS CloudTrail', 'signatureVersion' => 'v4', 'targetPrefix' => 'com.amazonaws.cloudtrail.v20131101.CloudTrail_20131101', ], 'operations' => [ 'AddTags' => [ 'name' => 'AddTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AddTagsRequest', ], 'output' => [ 'shape' => 'AddTagsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'CloudTrailARNInvalidException', ], [ 'shape' => 'ResourceTypeNotSupportedException', ], [ 'shape' => 'TagsLimitExceededException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'InvalidTagParameterException', ], [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'OperationNotPermittedException', ], ], 'idempotent' => true, ], 'CreateTrail' => [ 'name' => 'CreateTrail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateTrailRequest', ], 'output' => [ 'shape' => 'CreateTrailResponse', ], 'errors' => [ [ 'shape' => 'MaximumNumberOfTrailsExceededException', ], [ 'shape' => 'TrailAlreadyExistsException', ], [ 'shape' => 'S3BucketDoesNotExistException', ], [ 'shape' => 'InsufficientS3BucketPolicyException', ], [ 'shape' => 'InsufficientSnsTopicPolicyException', ], [ 'shape' => 'InsufficientEncryptionPolicyException', ], [ 'shape' => 'InvalidS3BucketNameException', ], [ 'shape' => 'InvalidS3PrefixException', ], [ 'shape' => 'InvalidSnsTopicNameException', ], [ 'shape' => 'InvalidKmsKeyIdException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'TrailNotProvidedException', ], [ 'shape' => 'InvalidParameterCombinationException', ], [ 'shape' => 'KmsKeyNotFoundException', ], [ 'shape' => 'KmsKeyDisabledException', ], [ 'shape' => 'KmsException', ], [ 'shape' => 'InvalidCloudWatchLogsLogGroupArnException', ], [ 'shape' => 'InvalidCloudWatchLogsRoleArnException', ], [ 'shape' => 'CloudWatchLogsDeliveryUnavailableException', ], [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'OperationNotPermittedException', ], ], 'idempotent' => true, ], 'DeleteTrail' => [ 'name' => 'DeleteTrail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTrailRequest', ], 'output' => [ 'shape' => 'DeleteTrailResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'InvalidHomeRegionException', ], ], 'idempotent' => true, ], 'DescribeTrails' => [ 'name' => 'DescribeTrails', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeTrailsRequest', ], 'output' => [ 'shape' => 'DescribeTrailsResponse', ], 'errors' => [ [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'OperationNotPermittedException', ], ], 'idempotent' => true, ], 'GetTrailStatus' => [ 'name' => 'GetTrailStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTrailStatusRequest', ], 'output' => [ 'shape' => 'GetTrailStatusResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', ], [ 'shape' => 'InvalidTrailNameException', ], ], 'idempotent' => true, ], 'ListPublicKeys' => [ 'name' => 'ListPublicKeys', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListPublicKeysRequest', ], 'output' => [ 'shape' => 'ListPublicKeysResponse', ], 'errors' => [ [ 'shape' => 'InvalidTimeRangeException', ], [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'OperationNotPermittedException', ], [ 'shape' => 'InvalidTokenException', ], ], 'idempotent' => true, ], 'ListTags' => [ 'name' => 'ListTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsRequest', ], 'output' => [ 'shape' => 'ListTagsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'CloudTrailARNInvalidException', ], [ 'shape' => 'ResourceTypeNotSupportedException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'OperationNotPermittedException', ], [ 'shape' => 'InvalidTokenException', ], ], 'idempotent' => true, ], 'LookupEvents' => [ 'name' => 'LookupEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'LookupEventsRequest', ], 'output' => [ 'shape' => 'LookupEventsResponse', ], 'errors' => [ [ 'shape' => 'InvalidLookupAttributesException', ], [ 'shape' => 'InvalidTimeRangeException', ], [ 'shape' => 'InvalidMaxResultsException', ], [ 'shape' => 'InvalidNextTokenException', ], ], 'idempotent' => true, ], 'RemoveTags' => [ 'name' => 'RemoveTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RemoveTagsRequest', ], 'output' => [ 'shape' => 'RemoveTagsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'CloudTrailARNInvalidException', ], [ 'shape' => 'ResourceTypeNotSupportedException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'InvalidTagParameterException', ], [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'OperationNotPermittedException', ], ], 'idempotent' => true, ], 'StartLogging' => [ 'name' => 'StartLogging', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartLoggingRequest', ], 'output' => [ 'shape' => 'StartLoggingResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'InvalidHomeRegionException', ], ], 'idempotent' => true, ], 'StopLogging' => [ 'name' => 'StopLogging', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopLoggingRequest', ], 'output' => [ 'shape' => 'StopLoggingResponse', ], 'errors' => [ [ 'shape' => 'TrailNotFoundException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'InvalidHomeRegionException', ], ], 'idempotent' => true, ], 'UpdateTrail' => [ 'name' => 'UpdateTrail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateTrailRequest', ], 'output' => [ 'shape' => 'UpdateTrailResponse', ], 'errors' => [ [ 'shape' => 'S3BucketDoesNotExistException', ], [ 'shape' => 'InsufficientS3BucketPolicyException', ], [ 'shape' => 'InsufficientSnsTopicPolicyException', ], [ 'shape' => 'InsufficientEncryptionPolicyException', ], [ 'shape' => 'TrailNotFoundException', ], [ 'shape' => 'InvalidS3BucketNameException', ], [ 'shape' => 'InvalidS3PrefixException', ], [ 'shape' => 'InvalidSnsTopicNameException', ], [ 'shape' => 'InvalidKmsKeyIdException', ], [ 'shape' => 'InvalidTrailNameException', ], [ 'shape' => 'TrailNotProvidedException', ], [ 'shape' => 'InvalidParameterCombinationException', ], [ 'shape' => 'InvalidHomeRegionException', ], [ 'shape' => 'KmsKeyNotFoundException', ], [ 'shape' => 'KmsKeyDisabledException', ], [ 'shape' => 'KmsException', ], [ 'shape' => 'InvalidCloudWatchLogsLogGroupArnException', ], [ 'shape' => 'InvalidCloudWatchLogsRoleArnException', ], [ 'shape' => 'CloudWatchLogsDeliveryUnavailableException', ], [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'OperationNotPermittedException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AddTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', ], 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], 'TagsList' => [ 'shape' => 'TagsList', ], ], ], 'AddTagsResponse' => [ 'type' => 'structure', 'members' => [], ], 'Boolean' => [ 'type' => 'boolean', ], 'ByteBuffer' => [ 'type' => 'blob', ], 'CloudTrailARNInvalidException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'CloudWatchLogsDeliveryUnavailableException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'CreateTrailRequest' => [ 'type' => 'structure', 'required' => [ 'Name', 'S3BucketName', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'IsMultiRegionTrail' => [ 'shape' => 'Boolean', ], 'EnableLogFileValidation' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'CreateTrailResponse' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', 'deprecated' => true, ], 'SnsTopicARN' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'IsMultiRegionTrail' => [ 'shape' => 'Boolean', ], 'TrailARN' => [ 'shape' => 'String', ], 'LogFileValidationEnabled' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'Date' => [ 'type' => 'timestamp', ], 'DeleteTrailRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'DeleteTrailResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeTrailsRequest' => [ 'type' => 'structure', 'members' => [ 'trailNameList' => [ 'shape' => 'TrailNameList', ], 'includeShadowTrails' => [ 'shape' => 'Boolean', ], ], ], 'DescribeTrailsResponse' => [ 'type' => 'structure', 'members' => [ 'trailList' => [ 'shape' => 'TrailList', ], ], ], 'Event' => [ 'type' => 'structure', 'members' => [ 'EventId' => [ 'shape' => 'String', ], 'EventName' => [ 'shape' => 'String', ], 'EventTime' => [ 'shape' => 'Date', ], 'Username' => [ 'shape' => 'String', ], 'Resources' => [ 'shape' => 'ResourceList', ], 'CloudTrailEvent' => [ 'shape' => 'String', ], ], ], 'EventsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], ], 'GetTrailStatusRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'GetTrailStatusResponse' => [ 'type' => 'structure', 'members' => [ 'IsLogging' => [ 'shape' => 'Boolean', ], 'LatestDeliveryError' => [ 'shape' => 'String', ], 'LatestNotificationError' => [ 'shape' => 'String', ], 'LatestDeliveryTime' => [ 'shape' => 'Date', ], 'LatestNotificationTime' => [ 'shape' => 'Date', ], 'StartLoggingTime' => [ 'shape' => 'Date', ], 'StopLoggingTime' => [ 'shape' => 'Date', ], 'LatestCloudWatchLogsDeliveryError' => [ 'shape' => 'String', ], 'LatestCloudWatchLogsDeliveryTime' => [ 'shape' => 'Date', ], 'LatestDigestDeliveryTime' => [ 'shape' => 'Date', ], 'LatestDigestDeliveryError' => [ 'shape' => 'String', ], 'LatestDeliveryAttemptTime' => [ 'shape' => 'String', ], 'LatestNotificationAttemptTime' => [ 'shape' => 'String', ], 'LatestNotificationAttemptSucceeded' => [ 'shape' => 'String', ], 'LatestDeliveryAttemptSucceeded' => [ 'shape' => 'String', ], 'TimeLoggingStarted' => [ 'shape' => 'String', ], 'TimeLoggingStopped' => [ 'shape' => 'String', ], ], ], 'InsufficientEncryptionPolicyException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InsufficientS3BucketPolicyException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InsufficientSnsTopicPolicyException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidCloudWatchLogsLogGroupArnException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidCloudWatchLogsRoleArnException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidHomeRegionException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidKmsKeyIdException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidLookupAttributesException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidMaxResultsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidParameterCombinationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidS3BucketNameException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidS3PrefixException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidSnsTopicNameException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidTagParameterException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidTimeRangeException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidTokenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidTrailNameException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'KmsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'KmsKeyDisabledException' => [ 'type' => 'structure', 'members' => [], 'deprecated' => true, 'exception' => true, ], 'KmsKeyNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ListPublicKeysRequest' => [ 'type' => 'structure', 'members' => [ 'StartTime' => [ 'shape' => 'Date', ], 'EndTime' => [ 'shape' => 'Date', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListPublicKeysResponse' => [ 'type' => 'structure', 'members' => [ 'PublicKeyList' => [ 'shape' => 'PublicKeyList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceIdList', ], 'members' => [ 'ResourceIdList' => [ 'shape' => 'ResourceIdList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListTagsResponse' => [ 'type' => 'structure', 'members' => [ 'ResourceTagList' => [ 'shape' => 'ResourceTagList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'LookupAttribute' => [ 'type' => 'structure', 'required' => [ 'AttributeKey', 'AttributeValue', ], 'members' => [ 'AttributeKey' => [ 'shape' => 'LookupAttributeKey', ], 'AttributeValue' => [ 'shape' => 'String', ], ], ], 'LookupAttributeKey' => [ 'type' => 'string', 'enum' => [ 'EventId', 'EventName', 'Username', 'ResourceType', 'ResourceName', ], ], 'LookupAttributesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LookupAttribute', ], ], 'LookupEventsRequest' => [ 'type' => 'structure', 'members' => [ 'LookupAttributes' => [ 'shape' => 'LookupAttributesList', ], 'StartTime' => [ 'shape' => 'Date', ], 'EndTime' => [ 'shape' => 'Date', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'LookupEventsResponse' => [ 'type' => 'structure', 'members' => [ 'Events' => [ 'shape' => 'EventsList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'MaximumNumberOfTrailsExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NextToken' => [ 'type' => 'string', ], 'OperationNotPermittedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'PublicKey' => [ 'type' => 'structure', 'members' => [ 'Value' => [ 'shape' => 'ByteBuffer', ], 'ValidityStartTime' => [ 'shape' => 'Date', ], 'ValidityEndTime' => [ 'shape' => 'Date', ], 'Fingerprint' => [ 'shape' => 'String', ], ], ], 'PublicKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PublicKey', ], ], 'RemoveTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', ], 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], 'TagsList' => [ 'shape' => 'TagsList', ], ], ], 'RemoveTagsResponse' => [ 'type' => 'structure', 'members' => [], ], 'Resource' => [ 'type' => 'structure', 'members' => [ 'ResourceType' => [ 'shape' => 'String', ], 'ResourceName' => [ 'shape' => 'String', ], ], ], 'ResourceIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'ResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ResourceTag' => [ 'type' => 'structure', 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], 'TagsList' => [ 'shape' => 'TagsList', ], ], ], 'ResourceTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTag', ], ], 'ResourceTypeNotSupportedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'S3BucketDoesNotExistException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'StartLoggingRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'StartLoggingResponse' => [ 'type' => 'structure', 'members' => [], ], 'StopLoggingRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'StopLoggingResponse' => [ 'type' => 'structure', 'members' => [], ], 'String' => [ 'type' => 'string', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'String', ], 'Value' => [ 'shape' => 'String', ], ], ], 'TagsLimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'TagsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'Trail' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', 'deprecated' => true, ], 'SnsTopicARN' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'IsMultiRegionTrail' => [ 'shape' => 'Boolean', ], 'HomeRegion' => [ 'shape' => 'String', ], 'TrailARN' => [ 'shape' => 'String', ], 'LogFileValidationEnabled' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'TrailAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'TrailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Trail', ], ], 'TrailNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'TrailNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'TrailNotProvidedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'UnsupportedOperationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'UpdateTrailRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'IsMultiRegionTrail' => [ 'shape' => 'Boolean', ], 'EnableLogFileValidation' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], 'UpdateTrailResponse' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'S3BucketName' => [ 'shape' => 'String', ], 'S3KeyPrefix' => [ 'shape' => 'String', ], 'SnsTopicName' => [ 'shape' => 'String', 'deprecated' => true, ], 'SnsTopicARN' => [ 'shape' => 'String', ], 'IncludeGlobalServiceEvents' => [ 'shape' => 'Boolean', ], 'IsMultiRegionTrail' => [ 'shape' => 'Boolean', ], 'TrailARN' => [ 'shape' => 'String', ], 'LogFileValidationEnabled' => [ 'shape' => 'Boolean', ], 'CloudWatchLogsLogGroupArn' => [ 'shape' => 'String', ], 'CloudWatchLogsRoleArn' => [ 'shape' => 'String', ], 'KmsKeyId' => [ 'shape' => 'String', ], ], ], ],];