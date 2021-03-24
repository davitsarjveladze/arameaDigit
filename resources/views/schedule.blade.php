@extends('layouts.app')

@section('content')
    <link href='{{asset('calendar/main.css')}}' rel='stylesheet' />
    <script src='{{asset('calendar/main.js')}}'></script>
    <script>
        SheduleEvent = [
            {
                title           : 'tetri bairagebi',
                start           : '2021-03-20',
                hours           : '22:32',
                address         : 'batumi rurua 11',
                description     : 'dsf asdsdfhs dfghdfhd fh',
                link   : 1
            },
            {
                title           : 'green tree',
                start           : '2021-03-21',
                hours           : '22:32',
                address         : 'batumi rurua 11',
                description     : 'asd asd asd gsdf gsdg sdfg sdg',
                link            : 2
            },
            {
                title           : 'object table',
                start           : '2021-03-21',
                hours           : '22:32',
                address         : 'batumi rurua 11',
                description     : 'asd asd asd gsdf gsdg sdfg sdg',
                link            : 2
            },
        ]
        document.addEventListener('DOMContentLoaded', function() {
            let initialLocaleCode = 'en';
            // let localeSelectorEl = document.getElementById('locale-selector');
            let calendarEl = document.getElementById('calendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: 'bootstrap',
                dateClick (dateClickInfo ) {
                    deyEvent = [];
                    for (let i in SheduleEvent) {
                        console.log(SheduleEvent[i])
                        if (dateClickInfo.dateStr ===SheduleEvent[i].start ) {
                            deyEvent.push(SheduleEvent[i])
                        }
                    }
                    if (deyEvent.length !== 0) {
                        let Dom = []
                        for (let i in deyEvent) {
                         Dom.push('<div class="p-3" style="border-bottom: #2d3748 1px dotted">  ' +
                             '<div><span ><b>Title: </b></span><span>'+deyEvent[i].title+'</span> </div> ' +
                             '<div> ' +
                             '<span ><b>Date: </b></span><span>'+deyEvent[i].start +' '+deyEvent[i].hours+'</span> </div> ' +
                             '<div> <span ><b>Address: </b></span><span >'+deyEvent[i].address+'</span> ' +
                             '</div> <div> <span ><b>Description: </b>' +
                             '</span>'+deyEvent[i].description+'<span></span> </div>' +
                             '<div></span> <a href="/posts/show/'+deyEvent[i].link+'">Show post</a></div>' +
                             ' </div>')
                        }
                        document.getElementById('EventsCard').innerHTML = Dom.join('');
                        document.getElementById('OpenEventModal').click();
                    }
                },
                navLinks: false, // can click day/week names to navigate views
                businessHours: false, // display business hours
                editable: false,
                locale: initialLocaleCode,
                selectMirror : true,
                selectable: true,
                events: SheduleEvent,
                eventLink : false
            });


            calendar.render();
            // calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
            //     var optionEl = document.createElement('option');
            //     optionEl.value = localeCode;
            //     optionEl.selected = localeCode == initialLocaleCode;
            //     optionEl.innerText = localeCode;
            //     localeSelectorEl.appendChild(optionEl);
            // });

            // when the selected option changes, dynamically change the calendar option
            // localeSelectorEl.addEventListener('change', function() {
            //     if (this.value) {
            //         calendar.setOption('locale', this.value);
            //     }
            // })
        });

    </script>
    <div class="content container">
        <div class="row">
            <div class=" col-md-12" >
                <h2 class="h2-home">Events</h2>
                <div id='top'>

{{--                    Locales:--}}
{{--                    <select  id='locale-selector'>--}}
{{--                        <option value="fr">fr</option>--}}
{{--                    </select>--}}

                </div>
                <div id='calendar'></div>
            </div>
    </div>
        <input type="hidden" id="OpenEventModal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div  class="modal-body">
                        <div id="EventsCard">
                            <div class="p-3" style="border-bottom: #2d3748 1px dotted">
                                <div>
                                    <span ><b>Title:</b></span><span></span>
                                </div>
                                <div>
                                    <span ><b>Date:</b></span><span id="title"></span>
                                </div>
                                <div>
                                    <span ><b>Address:</b></span><span id="title"></span>
                                </div>
                                <div>
                                    <span ><b>Description:</b></span><span id="title"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

@endsection
