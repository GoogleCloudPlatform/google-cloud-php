# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import synthtool as s
import synthtool.gcp as gcp
import logging

logging.basicConfig(level=logging.DEBUG)

gapic = gcp.GAPICGenerator()
common = gcp.CommonTemplates()

# tasks has two product names, and a poorly named artman yaml
v2beta2_library = gapic._generate_code(
    'tasks', 'v2beta2', 'php',
    config_path='artman_cloudtasks.yaml',
    artman_output_name='google-cloud-cloud-tasks-v2beta2')


s.copy(v2beta2_library / f'src/')
s.copy(v2beta2_library / f'proto/src/GPBMetadata/Google/Cloud/Tasks/V2Beta2', f'metadata/V2Beta2')
s.copy(v2beta2_library / f'proto/src/Google/Cloud/Tasks/V2beta2', f'src/V2beta2')
s.copy(v2beta2_library / f'tests')
