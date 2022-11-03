<template>
  <li class="nav-item dropdown">
    <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown" aria-expanded="false">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-282px, 38px, 0px);">
      <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Уведомления</h5>
        <small class="opacity-7"></small>
      </div>
      <div class="dropdown-scroll" style="overflow: hidden; outline: none;" tabindex="3">
        <ul class="list-group list-group-flush">
          <li class="px-4 py-3 list-group-item">
            <a href="#" class="d-flex align-items-center hide-show-toggler">
              <div class="flex-shrink-0">
                <figure class="avatar mr-3">
                            <span class="avatar-title bg-info-bright text-info rounded-circle">
                                <i class="ti-lock"></i>
                            </span>
                </figure>
              </div>
              <div class="flex-grow-1">
                <p class="mb-0 line-height-20 d-flex justify-content-between">
                  2 steps verification
                  <i title="" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11" data-original-title="Mark as read"></i>
                </p>
                <span class="text-muted small">20 min ago</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="px-4 py-3 text-right border-top">
        <ul class="list-inline small">
          <li class="list-inline-item mb-0">
            <a href="#">Mark All Read</a>
          </li>
        </ul>
      </div>
      <div id="ascrail2002" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 1000; cursor: default; position: absolute; top: 53.4px; left: 322px; height: 300px; display: block; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 190px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div></div><div id="ascrail2002-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 1000; top: 345.4px; left: 0px; position: absolute; cursor: default; display: none; width: 322px; opacity: 0;"><div style="position: absolute; top: 0px; height: 6px; width: 330px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div></div></div>
  </li>
</template>

<script>
export default {
  data() {
    return {
      notifications: []
    }
  },
  created() {
    this.fetchNotifications()
  },
  mounted() {
  },
  beforeUnmount() {
  },

  methods: {
    fetchNotifications() {
      axios.get('/admin/notifications');
    }
  },

}
</script>
