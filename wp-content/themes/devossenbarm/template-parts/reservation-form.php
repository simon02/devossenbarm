<form id="reservations" action="/base-hotel/restaurant.php#menu" method="post">
  <div class="fieldgroup">
    <div class="field calendar">
      <input name="arrival" type="text" placeholder="Arrival Date" id="arrival" readonly="" class="hasDatepicker"><i class="fa fa-calendar-o"></i>
    </div>
    <div class="field calendar">
      <input name="departure" type="text" placeholder="Departure Date" id="departure" readonly="" class="hasDatepicker"><i class="fa fa-calendar-o"></i>
    </div>
  </div>
  <button name="send" value="sendform" class='m10'>
    <span data-hover="Book a Table">Check Availability</span>
  </button>
  <p class='m0 text-center'>
    <a href="https://reservations.cubilis.eu/b-and-b-de-vossenbarm-snellegem/Rooms/GeneralAvailability?taal=nl">or view general availability</a>
  </p>
</form>