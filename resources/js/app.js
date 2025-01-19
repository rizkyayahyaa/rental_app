/*
Author       : Dreamguys
Template Name: SmartHR - Bootstrap Admin Template
Version      : 3.6
*/
import Swal from 'sweetalert2';
Swal.fire({
    title: 'Hello World!',
    text: 'This is a SweetAlert2 notification.',
    icon: 'success'
});

$(document).ready(function() {

	// Variables declarations

	var $wrapper = $('.main-wrapper');
	var $pageWrapper = $('.page-wrapper');

	// Sidebar

	var Sidemenu = function() {
		this.$menuItem = $('#sidebar-menu a');
	};

	// function init() {
	// 	var $this = Sidemenu;
	// 	$('#sidebar-menu a').on('click', function(e) {
	// 		if($(this).parent().hasClass('submenu')) {
	// 			e.preventDefault();
	// 		}
	// 		if(!$(this).hasClass('subdrop')) {
	// 			$('ul', $(this).parents('ul:first')).slideUp(350);
	// 			$('a', $(this).parents('ul:first')).removeClass('subdrop');
	// 			$(this).next('ul').slideDown(350);
	// 			$(this).addClass('subdrop');
	// 		} else if($(this).hasClass('subdrop')) {
	// 			$(this).removeClass('subdrop');
	// 			$(this).next('ul').slideUp(350);
	// 		}
	// 	});
	// 	$('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
	// }

	function init() {
		var $this = Sidemenu;
		$('.sub-menu a').on('click', function(e) {
			if($(this).parent().hasClass('submenu')) {
				e.preventDefault();
			}
			if(!$(this).hasClass('subdrop')) {
				$('ul', $(this).parents('ul:first')).slideUp(350);
				$('a', $(this).parents('ul:first')).removeClass('subdrop');
				$(this).next('ul').slideDown(350);
				$(this).addClass('subdrop');
			} else if($(this).hasClass('subdrop')) {
				$(this).removeClass('subdrop');
				$(this).next('ul').slideUp(350);
			}
		});
		$('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
	}

	// Sidebar Initiate
	init();

	// Mobile menu sidebar overlay

	$('body').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function() {
		$wrapper.toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').addClass('menu-opened');
		$('#task_window').removeClass('opened');
		return false;
	});

	$(".sidebar-overlay").on("click", function () {
			$('html').removeClass('menu-opened');
			$(this).removeClass('opened');
			$wrapper.removeClass('slide-nav');
			$('.sidebar-overlay').removeClass('opened');
			$('#task_window').removeClass('opened');
	});

	// Password Show
	if($('.toggle-password').length > 0) {
		$(document).on('click', '.toggle-password', function() {
			$(this).toggleClass("fa-eye fa-eye-slash");
			var input = $(".pass-input");
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});
	}


	// Chat sidebar overlay

	$(document).on('click', '#task_chat', function() {
		$('.sidebar-overlay').toggleClass('opened');
		$('#task_window').addClass('opened');
		return false;
	});

	// Modal Popup hide show

	if($('.modal').length > 0 ){
		var modalUniqueClass = ".modal";
		$('.modal').on('show.bs.modal', function(e) {
		  var $element = $(this);
		  var $uniques = $(modalUniqueClass + ':visible').not($(this));
		  if ($uniques.length) {
			$uniques.modal('hide');
			$uniques.one('hidden.bs.modal', function(e) {
			  $element.modal('show');
			});
			return false;
		  }
		});
	}

	// Floating Label

	if($('.floating').length > 0 ){
		$('.floating').on('focus blur', function (e) {
		$(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
		}).trigger('blur');
	}

		// Page Content Height

	var pHeight = $(window).height();
	$pageWrapper.css('min-height', pHeight);
	$(window).resize(function() {
		var prHeight = $(window).height();
		$pageWrapper.css('min-height', prHeight);
	});

	// Tooltip

	if($('[data-bs-toggle="tooltip"]').length > 0) {
		$('[data-bs-toggle="tooltip"]').tooltip();
	}

	// Email Inbox

	if($('.clickable-row').length > 0 ){
		$(".clickable-row").click(function() {
			window.location = $(this).data("href");
		});
	}

	// Check all email

	$(document).on('click', '#check_all', function() {
		$('.checkmail').click();
		return false;
	});
	if($('.checkmail').length > 0) {
		$('.checkmail').each(function() {
			$(this).on('click', function() {
				if($(this).closest('tr').hasClass('checked')) {
					$(this).closest('tr').removeClass('checked');
				} else {
					$(this).closest('tr').addClass('checked');
				}
			});
		});
	}

	// Mail important

	$(document).on('click', '.mail-important', function() {
		$(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');
	});

	// Task Complete

	$(document).on('click', '#task_complete', function() {
		$(this).toggleClass('task-completed');
		return false;
	});

	// Multiselect

	if($('#customleave_select').length > 0) {
		$('#customleave_select').multiselect();
	}
	if($('#edit_customleave_select').length > 0) {
		$('#edit_customleave_select').multiselect();
	}

	// Leave Settings button show

	$(document).on('click', '.leave-edit-btn', function() {
		$(this).removeClass('leave-edit-btn').addClass('btn btn-white leave-cancel-btn').text('Cancel');
		$(this).closest("div.leave-right").append('<button class="btn btn-primary leave-save-btn" type="submit">Save</button>');
		$(this).parent().parent().find("input").prop('disabled', false);
		return false;
	});
	$(document).on('click', '.leave-cancel-btn', function() {
		$(this).removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
		$(this).closest("div.leave-right").find(".leave-save-btn").remove();
		$(this).parent().parent().find("input").prop('disabled', true);
		return false;
	});

	$(document).on('change', '.leave-box .onoffswitch-checkbox', function() {
		var id = $(this).attr('id').split('_')[1];
		if ($(this).prop("checked") == true) {
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', false);
			$("#leave_"+id+" .leave-action .btn").prop('disabled', false);
		}
	    else {
			$("#leave_"+id+" .leave-action .btn").prop('disabled', true);
			$("#leave_"+id+" .leave-cancel-btn").parent().parent().find("input").prop('disabled', true);
			$("#leave_"+id+" .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove();
			$("#leave_"+id+" .leave-cancel-btn").removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', true);
		}
	});

	$('.leave-box .onoffswitch-checkbox').each(function() {
		var id = $(this).attr('id').split('_')[1];
		if ($(this).prop("checked") == true) {
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', false);
			$("#leave_"+id+" .leave-action .btn").prop('disabled', false);
		}
	    else {
			$("#leave_"+id+" .leave-action .btn").prop('disabled', true);
			$("#leave_"+id+" .leave-cancel-btn").parent().parent().find("input").prop('disabled', true);
			$("#leave_"+id+" .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove();
			$("#leave_"+id+" .leave-cancel-btn").removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', true);
		}
	});

	// Placeholder Hide

	if ($('.otp-input, .zipcode-input input, .noborder-input input').length > 0) {
		$('.otp-input, .zipcode-input input, .noborder-input input').focus(function () {
			$(this).data('placeholder', $(this).attr('placeholder'))
				   .attr('placeholder', '');
		}).blur(function () {
			$(this).attr('placeholder', $(this).data('placeholder'));
		});
	}

	// OTP Input

	if ($('.otp-input').length > 0) {
		$(".otp-input").keyup(function(e) {
			if ((e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105)) {
				$(e.target).next('.otp-input').focus();
			} else if (e.which == 8) {
				$(e.target).prev('.otp-input').focus();
			}
		});
	}

	// Small Sidebar

	$(document).on('click', '#toggle_btn', function() {
		if($('body').hasClass('mini-sidebar')) {
			$('body').removeClass('mini-sidebar');
			$('.subdrop + ul').slideDown();
		} else {
			$('body').addClass('mini-sidebar');
			$('.subdrop + ul').slideUp();
		}
		return false;
	});
	$(document).on('mouseover', function(e) {
		e.stopPropagation();
		if($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
			var targ = $(e.target).closest('.sidebar').length;
			if(targ) {
				$('body').addClass('expand-menu');
				$('.subdrop + ul').slideDown();
			} else {
				$('body').removeClass('expand-menu');
				$('.subdrop + ul').slideUp();
			}
			return false;
		}
	});

	$(document).on('click', '.top-nav-search .responsive-search', function() {
		$('.top-nav-search').toggleClass('active');
	});

	$(document).on('click', '#file_sidebar_toggle', function() {
		$('.file-wrap').toggleClass('file-sidebar-toggle');
	});

	$(document).on('click', '.file-side-close', function() {
		$('.file-wrap').removeClass('file-sidebar-toggle');
	});

	if($('.kanban-wrap').length > 0) {
		$(".kanban-wrap").sortable({
			connectWith: ".kanban-wrap",
			handle: ".kanban-box",
			placeholder: "drag-placeholder"
		});
	}

	// New Ticket Chart
	if($('#newTicketChart').length > 0) {
		var options = {
			series: [{
			name: 'series1',
			color: '#4a7feb',
			data: [31, 40, 28, 51, 42, 109, 100]
		}],
		chart: {
			type: 'area',
			toolbar: {
				show: false
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'straight'
		},
		xaxis: {
			labels: {
				show: false
			}
		},
		yaxis: {
			labels: {
				show: false
			}
		},
		grid: {
			show: false
		}
		};

		var chart = new ApexCharts(document.querySelector("#newTicketChart"), options);
		chart.render();
	}

	// Solved Ticket Chart
	if($('#solvedTicketChart').length > 0) {
		var options = {
			series: [{
			name: 'series1',
			color: '#ff7849',
			data: [31, 40, 28, 51, 42, 109, 100]
		}],
		chart: {
			type: 'area',
			toolbar: {
				show: false
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'straight'
		},
		xaxis: {
			labels: {
				show: false
			}
		},
		yaxis: {
			labels: {
				show: false
			}
		},
		grid: {
			show: false
		}
		};

		var chart = new ApexCharts(document.querySelector("#solvedTicketChart"), options);
		chart.render();
	}

	// Open Ticket Chart
	if($('#openTicketChart').length > 0) {
		var options = {
			series: [{
			name: 'series1',
			color: '#ff0000',
			data: [31, 40, 28, 51, 42, 109, 100]
		}],
		chart: {
			type: 'area',
			toolbar: {
				show: false
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'straight'
		},
		xaxis: {
			labels: {
				show: false
			}
		},
		yaxis: {
			labels: {
				show: false
			}
		},
		grid: {
			show: false
		}
		};

		var chart = new ApexCharts(document.querySelector("#openTicketChart"), options);
		chart.render();
	}

	// Pending Ticket Chart
	if($('#pendingTicketChart').length > 0) {
		var options = {
			series: [{
			name: 'series1',
			color: '#4fad4c',
			data: [31, 40, 28, 51, 42, 109, 100]
		}],
		chart: {
			type: 'area',
			toolbar: {
				show: false
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'straight'
		},
		xaxis: {
			labels: {
				show: false
			}
		},
		yaxis: {
			labels: {
				show: false
			}
		},
		grid: {
			show: false
		}
		};

		var chart = new ApexCharts(document.querySelector("#pendingTicketChart"), options);
		chart.render();
	}

	// Goal Tracking Chart
	if($('#goalTrackChart').length > 0) {
		var options = {
			series: [50],
			chart: {
			height: 80,
			type: 'radialBar',
			dropShadow: {
				enabled: false,
				blur: 1,
				color: '#000',
				opacity: 0.25
			}
		},
		plotOptions: {
			radialBar: {
				hollow: {
				size: '60%',
				background: "#fff"
				}
			},
		},
		labels: ['70%'],
		};

		var chart = new ApexCharts(document.querySelector("#goalTrackChart"), options);
		chart.render();
	}

	if($('#chart22').length > 0) {
		var options = {
			series: [{
			  name: "Full time",
			  data: [10, 41, 35, 51, 49, 62, 69, 91, 148],
			  color: '#038900'
		  },
		  {
			name: "Part time",
			data: [24, 54, 25, 61, 39, 63, 65, 87, 120],
			color: '#FF0065'
		}],
			chart: {
			height: 280,
			type: 'line',
			toolbar: {
				show: false
			},
			zoom: {
			  enabled: false
			}
		  },
		  dataLabels: {
			enabled: false
		  },
		  stroke: {
			  width: 1,
			curve: 'straight'
		  },
		  grid: {
			row: {
			  colors: ['transparent'], // takes an array which will be repeated on columns
			  opacity: 0.5
			},
			borderColor: '#DDDDDD',
			xaxis: {
				lines: {
					show: true
				}
			},
			yaxis: {
				lines: {
					show: true
				}
			},
		  },
		  xaxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
		  },
		  markers: {
			size: 4
		  }
		  };

		  var chart = new ApexCharts(document.querySelector("#chart22"), options);
		  chart.render();
	}

});

// Loader

$(window).on ('load', function (){
	$('#loader').delay(100).fadeOut('slow');
	$('#loader-wrapper').delay(500).fadeOut('slow');
});
