import PerfectScrollbar from 'perfect-scrollbar';
window.PerfectScrollbar = PerfectScrollbar;

// resources/js/app.js
import $ from 'jquery';
window.$ = window.jQuery = $; // Expose jQuery globally
import moment from 'moment';
window.moment = moment; // Expose Moment.js globally
import 'daterangepicker/daterangepicker.js';

require('./bootstrap');
require('./custom')
