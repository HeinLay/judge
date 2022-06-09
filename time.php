<?php
  do {
    print_r('Please input specified time from 0:00 to 23:00 :');
    $X =  (int)fgets(STDIN);
  } while ($X < 0 || $X > 23);

  print_r('Please input start time :');
  $firsttime =  (int)fgets(STDIN);
  
  print_r('Please input end time :');
  $lasttime =  (int)fgets(STDIN);
  
  if ($firsttime <= $lasttime) {
    if ($X >= $firsttime && $X <= $lasttime) {
      echo("{$X}o'clock is included from {$firsttime}o'clock to {$lasttime}o'clock");
    } else {
      echo("{$X}o'clock is not included from {$firsttime}o'clock to {$lasttime}o'clock");
    }
  } elseif ($firsttime > $lasttime) {
    $lasttime += 24;
    $X += 24;
    if ($X >= $firsttime && $X < $lasttime) {
      $lasttime -= 24;
      $X -= 24;
      echo("{$X}o'clock is included from {$firsttime}o'clock to {$lasttime}o'clock");
    } else {
      $lasttime -= 24;
      $X -= 24;
      echo("{$X}o'clock is not included from {$firsttime}o'clock to {$lasttime}o'clock");
    }
  }
