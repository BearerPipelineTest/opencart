<?php
// This file was auto-generated from sdk-root/src/data/healthlake/2017-07-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-07-01', 'endpointPrefix' => 'healthlake', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'HealthLake', 'serviceFullName' => 'Amazon HealthLake', 'serviceId' => 'HealthLake', 'signatureVersion' => 'v4', 'signingName' => 'healthlake', 'targetPrefix' => 'HealthLake', 'uid' => 'healthlake-2017-07-01', ], 'operations' => [ 'CreateFHIRDatastore' => [ 'name' => 'CreateFHIRDatastore', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateFHIRDatastoreRequest', ], 'output' => [ 'shape' => 'CreateFHIRDatastoreResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteFHIRDatastore' => [ 'name' => 'DeleteFHIRDatastore', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteFHIRDatastoreRequest', ], 'output' => [ 'shape' => 'DeleteFHIRDatastoreResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeFHIRDatastore' => [ 'name' => 'DescribeFHIRDatastore', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeFHIRDatastoreRequest', ], 'output' => [ 'shape' => 'DescribeFHIRDatastoreResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeFHIRImportJob' => [ 'name' => 'DescribeFHIRImportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeFHIRImportJobRequest', ], 'output' => [ 'shape' => 'DescribeFHIRImportJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListFHIRDatastores' => [ 'name' => 'ListFHIRDatastores', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListFHIRDatastoresRequest', ], 'output' => [ 'shape' => 'ListFHIRDatastoresResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartFHIRImportJob' => [ 'name' => 'StartFHIRImportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartFHIRImportJobRequest', ], 'output' => [ 'shape' => 'StartFHIRImportJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'BoundedLengthString' => [ 'type' => 'string', 'max' => 5000, 'min' => 1, 'pattern' => '[\\P{M}\\p{M}]{1,5000}', ], 'ClientTokenString' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-]+$', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'CreateFHIRDatastoreRequest' => [ 'type' => 'structure', 'required' => [ 'DatastoreTypeVersion', ], 'members' => [ 'DatastoreName' => [ 'shape' => 'DatastoreName', ], 'DatastoreTypeVersion' => [ 'shape' => 'FHIRVersion', ], 'PreloadDataConfig' => [ 'shape' => 'PreloadDataConfig', ], 'ClientToken' => [ 'shape' => 'ClientTokenString', 'idempotencyToken' => true, ], ], ], 'CreateFHIRDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'DatastoreArn', 'DatastoreStatus', 'DatastoreEndpoint', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DatastoreArn' => [ 'shape' => 'DatastoreArn', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'DatastoreEndpoint' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DatastoreArn' => [ 'type' => 'string', 'pattern' => '^arn:aws((-us-gov)|(-iso)|(-iso-b)|(-cn))?:healthlake:[a-zA-Z0-9-]+:[0-9]{12}:datastore/.+?', ], 'DatastoreFilter' => [ 'type' => 'structure', 'members' => [ 'DatastoreName' => [ 'shape' => 'DatastoreName', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'CreatedBefore' => [ 'shape' => 'Timestamp', ], 'CreatedAfter' => [ 'shape' => 'Timestamp', ], ], ], 'DatastoreId' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'DatastoreName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'DatastoreProperties' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'DatastoreArn', 'DatastoreStatus', 'DatastoreTypeVersion', 'DatastoreEndpoint', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DatastoreArn' => [ 'shape' => 'DatastoreArn', ], 'DatastoreName' => [ 'shape' => 'DatastoreName', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'DatastoreTypeVersion' => [ 'shape' => 'FHIRVersion', ], 'DatastoreEndpoint' => [ 'shape' => 'String', ], 'PreloadDataConfig' => [ 'shape' => 'PreloadDataConfig', ], ], ], 'DatastorePropertiesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatastoreProperties', ], ], 'DatastoreStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'DELETING', 'DELETED', ], ], 'DeleteFHIRDatastoreRequest' => [ 'type' => 'structure', 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], ], ], 'DeleteFHIRDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'DatastoreArn', 'DatastoreStatus', 'DatastoreEndpoint', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DatastoreArn' => [ 'shape' => 'DatastoreArn', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'DatastoreEndpoint' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DescribeFHIRDatastoreRequest' => [ 'type' => 'structure', 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], ], ], 'DescribeFHIRDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'DatastoreProperties', ], 'members' => [ 'DatastoreProperties' => [ 'shape' => 'DatastoreProperties', ], ], ], 'DescribeFHIRImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'JobId', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeFHIRImportJobResponse' => [ 'type' => 'structure', 'required' => [ 'ImportJobProperties', ], 'members' => [ 'ImportJobProperties' => [ 'shape' => 'ImportJobProperties', ], ], ], 'FHIRVersion' => [ 'type' => 'string', 'enum' => [ 'R4', ], ], 'IamRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:iam::[0-9]{12}:role/.+', ], 'ImportJobProperties' => [ 'type' => 'structure', 'required' => [ 'JobId', 'JobStatus', 'SubmitTime', 'DatastoreId', 'InputDataConfig', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobName' => [ 'shape' => 'JobName', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'SubmitTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'Message' => [ 'shape' => 'Message', ], ], ], 'InputDataConfig' => [ 'type' => 'structure', 'members' => [ 'S3Uri' => [ 'shape' => 'S3Uri', ], ], 'union' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, 'fault' => true, ], 'JobId' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'JobName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'JobStatus' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'IN_PROGRESS', 'COMPLETED', 'FAILED', ], ], 'ListFHIRDatastoresRequest' => [ 'type' => 'structure', 'members' => [ 'Filter' => [ 'shape' => 'DatastoreFilter', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], ], ], 'ListFHIRDatastoresResponse' => [ 'type' => 'structure', 'required' => [ 'DatastorePropertiesList', ], 'members' => [ 'DatastorePropertiesList' => [ 'shape' => 'DatastorePropertiesList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResultsInteger' => [ 'type' => 'integer', 'max' => 500, 'min' => 1, ], 'Message' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'pattern' => '\\p{ASCII}{0,8192}', ], 'PreloadDataConfig' => [ 'type' => 'structure', 'required' => [ 'PreloadDataType', ], 'members' => [ 'PreloadDataType' => [ 'shape' => 'PreloadDataType', ], ], ], 'PreloadDataType' => [ 'type' => 'string', 'enum' => [ 'SYNTHEA', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'S3Uri' => [ 'type' => 'string', 'max' => 1024, 'pattern' => 's3://[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9](/.*)?', ], 'StartFHIRImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'InputDataConfig', 'DatastoreId', 'DataAccessRoleArn', 'ClientToken', ], 'members' => [ 'JobName' => [ 'shape' => 'JobName', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'ClientToken' => [ 'shape' => 'ClientTokenString', 'idempotencyToken' => true, ], ], ], 'StartFHIRImportJobResponse' => [ 'type' => 'structure', 'required' => [ 'JobId', 'JobStatus', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], ], ], 'String' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '[\\P{M}\\p{M}]{0,10000}', ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], ],];