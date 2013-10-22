<?php

class Benchmark {

  /**
   * Creates a loop that lasts for $allowed_time and logs how many
   * times a function was able to run
   *
   * @param string $name the name of the test 
   * @param function $test the function to run
   * @param integer $allowed_time seconds to run a function
   * @return string
   * @author Baylor Rae'
   */
  public static function run_test($name, $test, $allowed_time = 10) {

    // get the time the function was called
    $start_time = microtime(true);

    // stores how many times $test was able to run
    $times_run = 0;

    // don't allow output
    ob_start();

    // run the $test function until time is up
    do {
      call_user_func($test);
      $times_run++;
    }while( number_format(microtime(true) - $start_time, 0) < $allowed_time);

    // end output buffering
    ob_end_clean();

    // return the formatted results
    return self::results($name, $times_run, $allowed_time);
  }

  /**
   * Formats results for easy reading
   *
   * @param string $name name of the test
   * @param integer $times_run number of times the test ran
   * @param integer $allowed_time how long the test was allowed to run
   * @return string
   * @author Baylor Rae'
   */
  private static function results($name, $times_run, $allowed_time) {
    $output = '<h2>Results for ' . $name . '</h2>';
    $output .= '<dl>';

      $output .= '<dt>Times Run</dt>';
      $output .= '<dd>' . number_format($times_run, 0) . '</dd>';

      $output .= '<dt>Ran For</dt>';
      $output .= '<dd>' . $allowed_time . 's</dd>';

    $output .= '</dl>';
    return $output;
  }

}
?>