$(document).ready(function() {
    $('#example').DataTable();
    $('#seanceTable').DataTable();


    $('.remove').click(function(){
       var programme = this.id;

       $.ajax({
           type:"post",
           url: '../coach/removePrg',
           data:{ id:programme},
           success:function(response) {
               location.reload();
           }
       })
    });

    $('.unactive').click(function(){
        var programme = this.id;

        $.ajax({
            type:"post",
            url: '../coach/desactiverPrg',
            data:{ id:programme},
            success:function(response) {
                location.reload();
            }
        })
    });


    $('.active').click(function(){
        var programme = this.id;

        $.ajax({
            type:"post",
            url: '../coach/activerPrg',
            data:{ id:programme},
            success:function(response) {
                location.reload();
            }
        })
    });

    var modals = $('.modal.multi-step');

    modals.each(function(idx, modal) {
        var $modal = $(modal);
        var $bodies = $modal.find('div.modal-body');
        var total_num_steps = $bodies.length;
        var $progress = $modal.find('.m-progress');
        var $progress_bar = $modal.find('.m-progress-bar');
        var $progress_stats = $modal.find('.m-progress-stats');
        var $progress_current = $modal.find('.m-progress-current');
        var $progress_total = $modal.find('.m-progress-total');
        var $progress_complete  = $modal.find('.m-progress-complete');
        var reset_on_close = $modal.attr('reset-on-close') === 'true';

        function reset() {
            $modal.find('.step').hide();
            $modal.find('[data-step]').hide();
        }

        function completeSteps() {
            $progress_stats.hide();
            $progress_complete.show();
            $modal.find('.progress-text').animate({
                top: '-2em'
            });
            $modal.find('.complete-indicator').animate({
                top: '-2em'
            });
            $progress_bar.addClass('completed');
        }

        function getPercentComplete(current_step, total_steps) {
            return Math.min(current_step / total_steps * 100, 100) + '%';
        }

        function updateProgress(current, total) {
            $progress_bar.animate({
                width: getPercentComplete(current, total)
            });
            if (current - 1 >= total_num_steps) {
                completeSteps();
            } else {
                $progress_current.text(current);
            }

            $progress.find('[data-progress]').each(function() {
                var dp = $(this);
                if (dp.data().progress <= current - 1) {
                    dp.addClass('completed');
                } else {
                    dp.removeClass('completed');
                }
            });
        }

        function goToStep(step) {
            reset();
            var to_show = $modal.find('.step-' + step);
            if (to_show.length === 0) {
                // at the last step, nothing else to show
                return;
            }
            to_show.show();
            var current = parseInt(step, 10);
            updateProgress(current, total_num_steps);
            findFirstFocusableInput(to_show).focus();
        }

        function findFirstFocusableInput(parent) {
            var candidates = [parent.find('input'), parent.find('select'),
                    parent.find('textarea'),parent.find('button')],
                winner = parent;
            $.each(candidates, function() {
                if (this.length > 0) {
                    winner = this[0];
                    return false;
                }
            });
            return $(winner);
        }

        function bindEventsToModal($modal) {
            var data_steps = [];
            $('[data-step]').each(function() {
                var step = $(this).data().step;
                if (step && $.inArray(step, data_steps) === -1) {
                    data_steps.push(step);
                }
            });

            $.each(data_steps, function(i, v) {
                $modal.on('next.m.' + v, {step: v}, function(e) {
                    goToStep(e.data.step);
                });
            });
        }

        function initialize() {
            reset();
            updateProgress(1, total_num_steps);
            $modal.find('.step-1').show();
            $progress_complete.hide();
            $progress_total.text(total_num_steps);
            bindEventsToModal($modal, total_num_steps);
            $modal.data({
                total_num_steps: $bodies.length,
            });
            if (reset_on_close){
                //Bootstrap 2.3.2
                $modal.on('hidden', function () {
                    reset();
                    $modal.find('.step-1').show();
                })
                //Bootstrap 3
                $modal.on('hidden.bs.modal', function () {
                    reset();
                    $modal.find('.step-1').show();
                })
            }
        }

        initialize();
    })

    sendEvent = function() {
        $('#demo-modal').trigger('next.m.2');
        sendEvent = function() {
            $('#demo-modal').trigger('next.m.3');
        }
    }

    $('#final').click(function(){
        var formData = $(this).serialize();
        console.log(formData);
        $('#prvw').text(formData);
        $('#prvw').text('#form1 Preview');
    })

   /* $('.title_seance').click(function(){
        var id_seance = this.id;
        alert(id_seance);
       $.ajax({
           type:"post",
           url: '../coach/detail_seance',
           data:{ id:id_seance},
       })
    });*/
} );