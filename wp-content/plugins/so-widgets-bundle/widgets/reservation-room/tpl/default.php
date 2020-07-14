<?php
/**
 * @var array $classes
 */
?>

<aside>
<div id="block" class="form">
  <div class="blocktitle">
    <div class="small">
      <?php printf(__('verblijf vanaf <span>%s</span> per nacht', 'devossenbarm'), $instance['price']) ?>
    </div>
  </div>
  <form id="reservations" action="https://reservations.cubilis.eu/b-and-b-de-vossenbarm-snellegem/Rooms/Select">
    <div class="fieldgroup">
      <div class="field calendar">
        <input rel="datepicker" data-alt-field="#arrival_hidden" id="arrival" type="text" placeholder="<?php esc_html_e('Aankomstdatum', 'devossenbarm'); ?>">
        <input type="hidden" name="arrival" id="arrival_hidden">
      </div>
      <div class="field calendar">
        <input rel="datepicker" data-alt-field="#departure_hidden" id="departure" type="text" placeholder="<?php esc_html_e('Vertrekdatum', 'devossenbarm'); ?>">
        <input type="hidden" name="departure" id="departure_hidden">
      </div>
    </div>
    <button name="send" value="sendform" class='m10'>
      <input type="hidden" value="<?php echo $lang ?>" id="language" name="language">
      <input type="hidden" value="<?php echo $room_id ?>" id="room" name="Room">
      <span><?php esc_html_e('Bekijk beschikbaarheid', 'devossenbarm') ?></span>
    </button>
    <p class='m0 text-center'>
      <a href="https://reservations.cubilis.eu/b-and-b-de-vossenbarm-snellegem/Rooms/GeneralAvailability?taal=<?php echo $lang ?>"><?php echo __('of bekijk algemene beschikbaarheid', 'devossenbarm') ?></a>
    </p>
  </form>
</div>
<!-- Reservations Form | END -->
</aside>