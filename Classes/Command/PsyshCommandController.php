<?php
/*
 * (c) 2016 Oliver Gassner <og@plan2.net>
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace Plan2Net\Psysh\Command;

class PsyshCommandController extends \TYPO3\CMS\Extbase\Mvc\Controller\CommandController {

	public function ShellCommand() {
		eval(\Psy\sh());
	}

}