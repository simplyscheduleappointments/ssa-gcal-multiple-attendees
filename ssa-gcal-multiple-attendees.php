<?php
/**
 * Plugin Name: SSA Customization - Add multiple attendees to Google Calendar
 * Plugin URI:  https://simplyscheduleappointments.com
 * Description: Adjust calendar_attendees programmatically (to add multiple attendees to a Google Calendar event)
 * Version:     1.0.0
 * Author:      Simply Schedule Appointments
 * Author URI:  https://simplyscheduleappointments.com
 * Donate link: https://simplyscheduleappointments.com
 * License:     GPLv2
 * Text Domain: simply-schedule-appointments
 * Domain Path: /languages
 *
 * @link    https://simplyscheduleappointments.com
 *
 * @package Simply_Schedule_Appointments
 * @version 1.0.0
 *
 */

/**
 * Copyright (c) 2024 Simply Schedule Appointments (email : support@sssaplugin.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

add_filter( 'ssa/appointment/attendees', 'ssa_include_attendees', 10, 2 );

function ssa_include_attendees( $attendess, $appt ) {
	  				
	$appointment_obj = new SSA_Appointment_Object( $appt );

  	// If appointment type id is what you want, add extra attendees.
    if ( $appointment_obj->appointment_type_id == '1' ) {

		// Create a new attendee array and set up the email and name.
		$new_attendee1 = array(
			'email' => 'usmankhalid738@gmail.com',
			'name'  => 'Usman Khalid',
		);

		$new_attendee2 = array(
			'email' => 'ssa.simplyfoxy@gmail.com',
			'name'  => 'Simply Foxy',
		);

		// Add the attendee to the array of attendees.
		$attendess[] = $new_attendee1;
		$attendess[] = $new_attendee2;
	}
	  
  return $attendess;
}
