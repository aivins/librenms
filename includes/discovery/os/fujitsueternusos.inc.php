<?php
/*
 * LibreNMS
 *
 * Copyright (c) 2017 Søren Friis Rosiak <sorenrosiak@gmail.com>
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.  Please see LICENSE.txt at the top level of
 * the source code distribution for details.
 */

$eternus = array(
    '.1.3.6.1.4.1.211.1.21.1.150'
);

if (starts_with($sysObjectId, $eternus)) {
    $os = 'fujitsueternusos';
}

unset($eternus);