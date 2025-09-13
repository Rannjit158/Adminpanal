import './bootstrap';
import Alpine from "alpinejs"
//import persist from "@alpinejs/persist"

import ApexCharts from "apexcharts"
import Chart from "chart.js/auto"
import Dropzone from "dropzone"
import flatpickr from "flatpickr"
import "jsvectormap"
import "jsvectormap/dist/maps/world.js"
import Swiper from "swiper"

// FullCalendar
import { Calendar } from "@fullcalendar/core"
import dayGridPlugin from "@fullcalendar/daygrid"
import interactionPlugin from "@fullcalendar/interaction"
import listPlugin from "@fullcalendar/list"
import timeGridPlugin from "@fullcalendar/timegrid"

Alpine.plugin(persist)
window.Alpine = Alpine
Alpine.start()
