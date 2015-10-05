<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Icons';

  $HEAD = '
    <link rel="stylesheet" href="/theme/css/flexible-grid.css"/>
    <link rel="stylesheet" ' .
        'href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <style>
      table {
        color: #666;
      }
      thead th {
        color: #000;
      }
      tbody th {
        font-size: 2em;
        color: #000;
      }
      tbody td:last-child {
        font-size: .75em;
      }
      td {
        padding: 1em;
      }
    </style>
  ';
  $NAVIGATION = true;

  $icons_a_k = array(
    'add' => 'e145',
    'add_box' => 'e146',
    'add_circle' => 'e147',
    'add_circle_outline' => 'e148',
    'airplay' => 'e055',
    'alarm' => 'e855',
    'announcement' => 'e85a',
    'apps' => 'e5c3',
    'archive' => 'e149',
    'arrow_back' => 'e5c4',
    'arrow_drop_down' => 'e5c5',
    'arrow_drop_down_circle' => 'e5c6',
    'arrow_drop_up' => 'e5c7',
    'arrow_forward' => 'e5c8',
    'assessment' => 'e85c',
    'assignment' => 'e85d',
    'assistant' => 'e39f',
    'assistant_photo' => 'e3a0',
    'attach_file' => 'e226',
    'attach_money' => 'e227',
    'attachment' => 'e2bc',
    'autorenew' => 'e863',
    'av_timer' => 'e01b',
    'backspace' => 'e14a',
    'backup' => 'e864',
    'beenhere' => 'e52d',
    'block' => 'e14b',
    'bluetooth' => 'e1a7',
    'book' => 'e865',
    'bookmark' => 'e866',
    'bookmark_border' => 'e867',
    'broken_image' => 'e3ad',
    'bug_report' => 'e868',
    'build' => 'e869',
    'cached' => 'e86a',
    'cake' => 'e7e9',
    'call' => 'e0b0',
    'call_end' => 'e0b1',
    'camera' => 'e3af',
    'cancel' => 'e5c9',
    'cast' => 'e307',
    'cast_connected' => 'e308',
    'center_focus_strong' => 'e3b4',
    'center_focus_weak' => 'e3b5',
    'change_history' => 'e86b',
    'chat' => 'e0b7',
    'chat_bubble' => 'e0ca',
    'chat_bubble_outline' => 'e0cb',
    'check' => 'e5ca',
    'check_box' => 'e834',
    'check_box_outline_blank' => 'e835',
    'check_circle' => 'e86c',
    'chevron_left' => 'e5cb',
    'chevron_right' => 'e5cc',
    'clear' => 'e14c',
    'clear_all' => 'e0b8',
    'close' => 'e5cd',
    'closed_caption' => 'e01c',
    'cloud' => 'e2bd',
    'cloud_circle' => 'e2be',
    'cloud_done' => 'e2bf',
    'cloud_download' => 'e2c0',
    'cloud_off' => 'e2c1',
    'cloud_queue' => 'e2c2',
    'cloud_upload' => 'e2c3',
    'code' => 'e86f',
    'color_lens' => 'e3b7',
    'colorize' => 'e3b8',
    'comment' => 'e0b9',
    'computer' => 'e30a',
    'content_copy' => 'e14d',
    'content_cut' => 'e14e',
    'content_paste' => 'e14f',
    'control_point' => 'e3ba',
    'control_point_duplicate' => 'e3bb',
    'create' => 'e150',
    'crop' => 'e3be',
    'crop_original' => 'e3c4',
    'crop_square' => 'e3c6',
    'dehaze' => 'e3c7',
    'delete' => 'e872',
    'description' => 'e873',
    'desktop_mac' => 'e30b',
    'desktop_windows' => 'e30c',
    'details' => 'e3c8',
    'directions_bike' => 'e52f',
    'directions_boat' => 'e532',
    'directions_bus' => 'e530',
    'directions_car' => 'e531',
    'directions_railway' => 'e534',
    'directions_run' => 'e566',
    'directions_subway' => 'e533',
    'directions_transit' => 'e535',
    'directions_walk' => 'e536',
    'do_not_disturb' => 'e612',
    'do_not_disturb_alt' => 'e611',
    'done' => 'e876',
    'done_all' => 'e877',
    'drafts' => 'e151',
    'drive_eta' => 'e613',
    'edit' => 'e3c9',
    'eject' => 'e8fb',
    'email' => 'e0be',
    'equalizer' => 'e01d',
    'error' => 'e000',
    'error_outline' => 'e001',
    'event' => 'e878',
    'event_available' => 'e614',
    'event_busy' => 'e615',
    'event_note' => 'e616',
    'event_seat' => 'e903',
    'exit_to_app' => 'e879',
    'expand_less' => 'e5ce',
    'expand_more' => 'e5cf',
    'explore' => 'e87a',
    'exposure' => 'e3ca',
    'extension' => 'e87b',
    'face' => 'e87c',
    'fast_forward' => 'e01f',
    'fast_rewind' => 'e020',
    'favorite' => 'e87d',
    'favorite_border' => 'e87e',
    'feedback' => 'e87f',
    'file_download' => 'e2c4',
    'file_upload' => 'e2c6',
    'filter_drama' => 'e3dd',
    'filter_tilt_shift' => 'e3e2',
    'filter_vintage' => 'e3e3',
    'find_in_page' => 'e880',
    'flag' => 'e153',
    'flare' => 'e3e4',
    'flip' => 'e3e8',
    'flip_to_back' => 'e882',
    'flip_to_front' => 'e883',
    'folder' => 'e2c7',
    'folder_open' => 'e2c8',
    'folder_shared' => 'e2c9',
    'folder_special' => 'e617',
    'font_download' => 'e167',
    'forum' => 'e0bf',
    'forward' => 'e154',
    'forward_10' => 'e056',
    'forward_30' => 'e057',
    'forward_5' => 'e058',
    'fullscreen' => 'e5d0',
    'fullscreen_exit' => 'e5d1',
    'functions' => 'e24a',
    'get_app' => 'e884',
    'gps_fixed' => 'e1b3',
    'gps_not_fixed' => 'e1b4',
    'gps_off' => 'e1b5',
    'grade' => 'e885',
    'group' => 'e7ef',
    'group_add' => 'e7f0',
    'group_work' => 'e886',
    'hearing' => 'e023',
    'help' => 'e887',
    'help_outline' => 'e8fd',
    'highlight_off' => 'e888',
    'history' => 'e889',
    'home' => 'e88a',
    'hourglass_empty' => 'e88b',
    'hourglass_full' => 'e88c',
    'https' => 'e88d',
    'image' => 'e3f4',
    'image_aspect_ratio' => 'e3f5',
    'import_export' => 'e0c3',
    'inbox' => 'e156',
    'indeterminate_check_box' => 'e909',
    'info' => 'e88e',
    'info_outline' => 'e88f',
    'input' => 'e890',
    'keyboard' => 'e312',
    'keyboard_arrow_down' => 'e313',
    'keyboard_arrow_left' => 'e314',
    'keyboard_arrow_right' => 'e315',
    'keyboard_arrow_up' => 'e316',
    'keyboard_backspace' => 'e317',
    'keyboard_capslock' => 'e318',
    'keyboard_return' => 'e31b',
    'keyboard_tab' => 'e31c',
    'keyboard_voice' => 'e31d'
  );

  $icons_l_z = array(
    'label' => 'e892',
    'label_outline' => 'e893',
    'landscape' => 'e3f7',
    'language' => 'e894',
    'laptop' => 'e31e',
    'launch' => 'e895',
    'layers' => 'e53b',
    'layers_clear' => 'e53c',
    'link' => 'e157',
    'list' => 'e896',
    'live_help' => 'e0c6',
    'local_hospital' => 'e548',
    'location_disabled' => 'e1b6',
    'location_off' => 'e0c7',
    'location_on' => 'e0c8',
    'location_searching' => 'e1b7',
    'lock' => 'e897',
    'lock_open' => 'e898',
    'lock_outline' => 'e899',
    'looks' => 'e3fc',
    'loop' => 'e028',
    'loupe' => 'e402',
    'loyalty' => 'e89a',
    'mail' => 'e158',
    'map' => 'e55b',
    'markunread' => 'e159',
    'memory' => 'e322',
    'menu' => 'e5d2',
    'merge_type' => 'e252',
    'message' => 'e0c9',
    'mms' => 'e618',
    'mode_comment' => 'e253',
    'mode_edit' => 'e254',
    'money_off' => 'e25c',
    'monochrome_photos' => 'e403',
    'mood' => 'e7f2',
    'mood_bad' => 'e7f3',
    'more' => 'e619',
    'more_horiz' => 'e5d3',
    'more_vert' => 'e5d4',
    'mouse' => 'e323',
    'my_location' => 'e55c',
    'navigation' => 'e55d',
    'new_releases' => 'e031',
    'not_interested' => 'e033',
    'notifications' => 'e7f4',
    'notifications_active' => 'e7f7',
    'notifications_none' => 'e7f5',
    'notifications_off' => 'e7f6',
    'notifications_paused' => 'e7f8',
    'offline_pin' => 'e90a',
    'ondemand_video' => 'e63a',
    'open_in_browser' => 'e89d',
    'open_in_new' => 'e89e',
    'open_with' => 'e89f',
    'pages' => 'e7f9',
    'pageview' => 'e8a0',
    'palette' => 'e40a',
    'pause' => 'e034',
    'pause_circle_filled' => 'e035',
    'pause_circle_outline' => 'e036',
    'people' => 'e7fb',
    'people_outline' => 'e7fc',
    'person' => 'e7fd',
    'person_add' => 'e7fe',
    'person_outline' => 'e7ff',
    'person_pin' => 'e55a',
    'phone' => 'e0cd',
    'phone_android' => 'e324',
    'photo' => 'e410',
    'photo_camera' => 'e412',
    'pin_drop' => 'e55e',
    'place' => 'e55f',
    'play_arrow' => 'e037',
    'play_circle_filled' => 'e038',
    'play_circle_outline' => 'e039',
    'play_for_work' => 'e906',
    'playlist_add' => 'e03b',
    'poll' => 'e801',
    'polymer' => 'e8ab',
    'portrait' => 'e416',
    'power_settings_new' => 'e8ac',
    'print' => 'e8ad',
    'public' => 'e80b',
    'publish' => 'e255',
    'query_builder' => 'e8ae',
    'question_answer' => 'e8af',
    'queue' => 'e03c',
    'queue_music' => 'e03d',
    'radio_button_checked' => 'e837',
    'radio_button_unchecked' => 'e836',
    'receipt' => 'e8b0',
    'recent_actors' => 'e03f',
    'redeem' => 'e8b1',
    'redo' => 'e15a',
    'refresh' => 'e5d5',
    'remove' => 'e15b',
    'remove_circle' => 'e15c',
    'remove_circle_outline' => 'e15d',
    'remove_red_eye' => 'e417',
    'reorder' => 'e8fe',
    'repeat' => 'e040',
    'reply' => 'e15e',
    'reply_all' => 'e15f',
    'report' => 'e160',
    'report_problem' => 'e8b2',
    'restore' => 'e8b3',
    'room' => 'e8b4',
    'rotate_left' => 'e419',
    'rotate_right' => 'e41a',
    'save' => 'e161',
    'schedule' => 'e8b5',
    'school' => 'e80c',
    'search' => 'e8b6',
    'security' => 'e32a',
    'send' => 'e163',
    'settings' => 'e8b8',
    'share' => 'e80d',
    'shuffle' => 'e043',
    'skip_next' => 'e044',
    'skip_previous' => 'e045',
    'slideshow' => 'e41b',
    'smartphone' => 'e32c',
    'sort' => 'e164',
    'sort_by_alpha' => 'e053',
    'space_bar' => 'e256',
    'spellcheck' => 'e8ce',
    'star' => 'e838',
    'star_border' => 'e83a',
    'star_half' => 'e839',
    'stars' => 'e8d0',
    'stop' => 'e047',
    'supervisor_account' => 'e8d3',
    'swap_calls' => 'e0d7',
    'swap_horiz' => 'e8d4',
    'swap_vert' => 'e8d5',
    'swap_vertical_circle' => 'e8d6',
    'sync' => 'e627',
    'sync_disabled' => 'e628',
    'sync_problem' => 'e629',
    'tablet' => 'e32f',
    'tag_faces' => 'e420',
    'terrain' => 'e564',
    'texture' => 'e421',
    'thumb_down' => 'e8db',
    'thumb_up' => 'e8dc',
    'thumbs_up_down' => 'e8dd',
    'timer' => 'e425',
    'timer_off' => 'e426',
    'toc' => 'e8de',
    'today' => 'e8df',
    'toys' => 'e332',
    'traffic' => 'e565',
    'transform' => 'e428',
    'trending_down' => 'e8e3',
    'trending_flat' => 'e8e4',
    'trending_up' => 'e8e5',
    'tune' => 'e429',
    'tv' => 'e333',
    'undo' => 'e166',
    'unfold_less' => 'e5d6',
    'unfold_more' => 'e5d7',
    'verified_user' => 'e8e8',
    'vertical_align_bottom' => 'e258',
    'vertical_align_center' => 'e259',
    'vertical_align_top' => 'e25a',
    'visibility' => 'e8f4',
    'visibility_off' => 'e8f5',
    'voice_chat' => 'e62e',
    'voicemail' => 'e0d9',
    'volume_down' => 'e04d',
    'volume_mute' => 'e04e',
    'volume_off' => 'e04f',
    'volume_up' => 'e050',
    'vpn_key' => 'e0da',
    'vpn_lock' => 'e62f',
    'warning' => 'e002',
    'watch' => 'e334',
    'whatshot' => 'e80e',
    'wifi' => 'e63e',
    'zoom_in' => 'e8ff',
    'zoom_out' => 'e900'
  );

  if (!function_exists('getExample')) {
    function getExampleRow ($index, $name) {
      return '<tr class="example-' . $name . '">' .
        '<th scope="row"><i class="material-icons">' . $name . '</i></th>' .
        '<td>' . $name . '</td>' .
        '<td>&amp;#' . $index . ';</td>' .
      '</tr>';
    }
  }

  include_once 'template.inc.php';
}
?>

<p>
  As a general rule, the hazdev-template has chosen to incorporate the <a
  href="https://www.google.com/design/icons/">material icon font</a> pack when
  icons are required. A <a
  href="http://google.github.io/material-design-icons/">complete implementation
  guide</a> can be used as a reference for optimal usage and styling. Below are
  instructions for incorporating the fonts into projects already using the
  hazdev-template as well as a few examples.
</p>

<h2>Usage</h2>
<p>
  Include the stylesheet in the document <code>HEAD</code> section. This will
  tell the browser to download the web font used by the icons as well as
  classes/styles with canonical references to each font size.
</p>
<pre><code>$HEAD = '&lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/&gt;';</code></pre>

<p>
  Place icons on the page using the <code>material-icons</code> class on an
  element with content indicating the name of the icon to display.
</p>
<pre><code>&lt;i class="material-icons"&gt;face&lt;/i&gt;</code></pre>

<p>
  While browsers supported by the hazdev-template all support font ligatures,
  for maximum compatibility, you may want to use the character codeindex instead
  of the character name, like so:
</p>
<pre><code>&lt;i class="material-icons"&gt;&amp;#xE87C;&lt;/i&gt;</code></pre>

<p>
  Result: <i class="material-icons">face</i>
</p>

<h2>More Examples</h2>

<div class="row">
  <div class="column one-of-two">
  <table>
    <thead>
      <tr>
        <th scope="col">Icon</th>
        <th scope="col">Name</th>
        <th scope="col">Hex</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($icons_a_k as $name => $index) {
        print getExampleRow($index, $name);
      }
      ?>
    </tbody>
  </table>
  </div>
  <div class="column one-of-two">
  <table>
    <thead>
      <tr>
        <th scope="col">Icon</th>
        <th scope="col">Name</th>
        <th scope="col">Hex</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($icons_l_z as $name => $index) {
        print getExampleRow($index, $name);
      }
      ?>
    </tbody>
  </table>
</div>
