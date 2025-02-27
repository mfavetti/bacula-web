<?php

declare(strict_types=1);

/**
 * Copyright (C) 2010-2023 Davide Franco
 *
 * This file is part of Bacula-Web.
 *
 * Bacula-Web is free software: you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * Bacula-Web is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with Bacula-Web. If not, see
 * <https://www.gnu.org/licenses/>.
 */

namespace App\Entity;

use App\Libs\FileConfig;
use Core\Exception\ConfigFileException;

class Log
{
    private $logtext;

    private $time;

    /**
     * @return string
     */
    public function getLogText(): string
    {
        return $this->logtext;
    }

    /**
     * @return string
     * @throws ConfigFileException
     */
    public function getTime(): string
    {
        // TODO: we may not need to store everything in the session
        return date(FileConfig::get_Value('datetime_format'), strtotime($this->time));
    }
}
