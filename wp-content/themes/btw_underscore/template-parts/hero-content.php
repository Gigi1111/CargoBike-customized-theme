<div class="cover-container d-flex mx-auto flex-column">
            <!-- brand -->
            <!-- <div class="masthead">
                <div class="inner">
                    <div class="logo"></div>
                    <h3 class="masthead-brand">CargoBike</h3>
                </div>
            </div> -->


            <div class="cover-inner">
                <div class="cover-text">
                    <form action="/bikes" method="post">
                        <label for="search">
                            <h3>E-Bike rental in Europe for an unforgettable road trip</h3></label>
                        <br>
                        <input type="text" name="daterange" id="daterange" value="" />
                        <input type="submit" class="btn btn-success" id=”searchsubmit” value="Search"/>
                </div>
            </div>


        <script>
        // $(function() {
        //     $('input[name="daterange"]').daterangepicker({
        //         opens: 'left',
        //         showDropdowns: true,
        //         minDate: moment(),
        //         maxDate: moment().add(1, 'years'),
        //         showCustomRangeLabel: false,
        //         autoApply: true,
        //         locale: {
        //             format: 'MMM D, YYYY'
        //         }
        //     }, function(start, end, label) {
        //         console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        //     });
            
        //     // default range is today + 30 days
        //     var defaultRange = "" + moment().format('MMM D, YYYY') + " - " + moment().add(30, "days").format('MMM D, YYYY');
        //     $('input[name="daterange"]').val(defaultRange);
        //     $('.drp-buttons').css("display","none");
         
        // });

        // $(document).ready(function() { 
        //      //if has class end-date, .daterangepicker displaY; none;
        //     if ($(".end-date")[0]){ 
        //         $(".daterangepicker").css("display","none");
        //     }
        // }); 

        </script>
    </div>

