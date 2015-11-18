<<<<<<< HEAD
<?php

namespace Modules\Dashboard\Http\Controllers;
=======
<?php namespace Modules\Dashboard\Http\Controllers;
>>>>>>> parent of 2004808... CS Fixer

use Modules\Course\Repositories\CourseRepository;
use Modules\Dashboard\Repositories\DashboardRepository;
use Pingpong\Modules\Routing\Controller;
use Modules\Dashboard\Menus\PrincipalMenu;

class DashboardController extends Controller {

	/**
	 * @var DashboardRepository
	 */
	private $dashboard;

	public function __construct(DashboardRepository $dashboard)
	{
		$this->dashboard = $dashboard;
	}

	public function frontend(PrincipalMenu $principal)
	{
		return \Theme::view('dashboard.frontend', compact('principal'));
	}

	public function learning(PrincipalMenu $principal, CourseRepository $course)
	{
		$courses = $course->with('modules')->all();
		return \Theme::view('dashboard.learning', compact('principal', 'courses'));
	}

	public function admin(PrincipalMenu $principal)
	{
		return \Theme::view('dashboard.admin', compact('principal'));
	}
}
