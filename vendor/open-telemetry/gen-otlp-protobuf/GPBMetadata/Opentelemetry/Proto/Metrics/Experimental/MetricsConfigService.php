<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/experimental/metrics_config_service.proto

namespace GPBMetadata\Opentelemetry\Proto\Metrics\Experimental;

class MetricsConfigService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Opentelemetry\Proto\Resource\V1\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Eopentelemetry/proto/metrics/experimental/metrics_config_service.proto(opentelemetry.proto.metrics.experimental"r
MetricConfigRequest;
resource (2).opentelemetry.proto.resource.v1.Resource
last_known_fingerprint ("�
MetricConfigResponse
fingerprint (Z
	schedules (2G.opentelemetry.proto.metrics.experimental.MetricConfigResponse.Schedule
suggested_wait_time_sec (�
Schedulek
exclusion_patterns (2O.opentelemetry.proto.metrics.experimental.MetricConfigResponse.Schedule.Patternk
inclusion_patterns (2O.opentelemetry.proto.metrics.experimental.MetricConfigResponse.Schedule.Pattern

period_sec (;
Pattern
equals (	H 
starts_with (	H B
match2�
MetricConfig�
GetMetricConfig=.opentelemetry.proto.metrics.experimental.MetricConfigRequest>.opentelemetry.proto.metrics.experimental.MetricConfigResponseB�
+io.opentelemetry.proto.metrics.experimentalBMetricConfigServiceProtoPZIgithub.com/open-telemetry/opentelemetry-proto/gen/go/metrics/experimentalbproto3'
        , true);

        static::$is_initialized = true;
    }
}

