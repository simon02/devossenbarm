<aside>
<div id="block" class="form">
  <div class="blocktitle">
    <div class="small">
      <?php printf(__('verblijf vanaf <span>%s</span> per nacht', 'devossenbarm'), $instance['price']) ?>
    </div>
  </div>
  <form id="reservations" action="https://reservations.cubilis.eu/b-and-b-de-vossenbarm-snellegem/Rooms/Select">
    <input type="hidden" value="<?php echo __('Cubilis Taal Code', 'devossenbarm'); ?>" id="language" name="language">
    <input type="hidden" name="Room" value="16904">
    <div class="fieldgroup">  
      <div class="field calendar">
        <input type="hidden" name="arrival" id="arrival_hidden">
        <input rel="datepicker" data-alt-field="#arrival_hidden" id="arrival" type="text" placeholder="<?php esc_html_e('Arrival date', 'devossenbarm'); ?>"><i class="fa fa-calendar-o"></i>
      </div>
      <div class="field calendar">
          <input type="hidden" name="departure" id="departure_hidden">
          <input rel="datepicker" data-alt-field="#departure_hidden" id="departure" type="text" placeholder="<?php esc_html_e('Departure date', 'devossenbarm'); ?>"><i class="fa fa-calendar-o"></i>
      </div>
    </div>
    <button name="send" value="sendform" class='m10'>
      <span><?php esc_html_e('Bekijk beschikbaarheid', 'devossenbarm') ?></span>
    </button>
  </form>
</div>
<!-- Reservations Form | END -->
</aside>