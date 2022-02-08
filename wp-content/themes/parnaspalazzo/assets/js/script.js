$(document).ready(function () {
  switchTheme();
  getEvents();
  getEventPhoto();

  function getEvents() {
    if (location.pathname !== '/') {
      return false;
    }

    let $row = $('<div class="row"></div>')

    $.ajax({
      url: '/wp-content/themes/parnaspalazzo/api/events.php',
      type: 'get',
      data: {'number': 999, 'offset': 0},
      success: function (data) {
        data.forEach(function (value) {
          const $item = $(
            '<div class="col-md-4 events__item">' +
            '<a href="' + value.link + '">' +
            '<div class="events__item-img">' +
            '<img src="' + value.mainPhoto + '" alt="">' +
            '</div>' +
            '<div class="events__item-date">' +
            '<span>' + value.date + '</span>' +
            '</div>' +
            '<div class="events__item-title">' +
            '<span>' + value.title + '</span>' +
            '</div>' +
            '<div class="events__item-shadow"></div>' +
            '</a>' +
            '</div>'
          );

          $row.append($item);
        });

        $('.events').append($row);
      }
    });
  }

  function getEventPhoto() {
    if (location.pathname === '/') {
      return false;
    }

    const eventId = $('.event').data('event-id');

    if (!eventId) {
      return false;
    }

    let $row = $('<div class="row event__gallery"></div>')

    $.ajax({
      url: '/wp-content/themes/parnaspalazzo/api/event-photo.php',
      type: 'get',
      data: {'eventId': eventId, 'number': 999, 'offset': 0},
      success: function (data) {
        data.forEach(function (value) {
          const $item = $(
            '<div class="col-md-4 event__item" data-photo-id="' + value.id + '">' +
            '<a href="' + value.photoFull + '" data-fancybox="gallery">' +
            '<img src="' + value.photoPreview + '" alt="' + value.title + '">' +
            '</a>' +
            '</div>');

          $row.append($item);
        });

        $('.event').append($row);
      }
    });
  }

  function switchTheme() {
    $('.theme-switcher').click(function () {
      const $this = $(this);
      const value = $this.attr('data-value');
      const $body = $('body');

      if (value === 'dark') {
        $this.attr('data-value', 'light');
        $this.addClass('light').removeClass('dark');
        $('.i-light', $this).addClass('active').siblings().removeClass('active');
        $body.addClass('light-theme').removeClass('dark-theme');
      } else {
        $this.attr('data-value', 'dark');
        $this.addClass('dark').removeClass('light');
        $('.i-dark', $this).addClass('active').siblings().removeClass('active');
        $body.addClass('dark-theme').removeClass('light-theme');
      }
    });
  }
});