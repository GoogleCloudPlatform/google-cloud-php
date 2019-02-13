# Copyright 2019 Google LLC
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

library = gapic.php_library(
    service='irm',
    version='v1alpha2',
    config_path='/google/cloud/irm/artman_irm_v1alpha2.yaml',
    artman_output_name='google-cloud-irm-v1alpha2')

# copy all src except handwritten partial veneers
s.move(library / f'src/V1alpha2/Gapic')
s.move(library / f'src/V1alpha2/resources')

# copy proto files to src also
s.move(library / f'proto/src/Google/Cloud/Irm', f'src/')
s.move(library / f'tests/')

# copy GPBMetadata file to metadata
s.move(library / f'proto/src/GPBMetadata/Google/Cloud/Irm', f'metadata/')

# fix year
s.replace(
    '**/Gapic/*GapicClient.php',
    r'Copyright \d{4}',
    r'Copyright 2019')
s.replace(
    'tests/**/V1alpha2/*Test.php',
    r'Copyright \d{4}',
    r'Copyright 2019')
