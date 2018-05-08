@extends('layouts.app')

@section('content')
    <div id="vmap" style="width: 100%; height: 90vh;"></div>
@stop

@section('header')
    <link rel="stylesheet" href="/css/jqvmap.min.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
@stop

@section('footer')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.vmap.min.js"></script>
    <script src="/js/jquery.vmap.world.js"></script>
    <script src="/js/jquery.vmap.sampledata.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#a5bfdd',
                borderColor: '#818181',
                borderOpacity: 0.25,
                borderWidth: 1,
                color: '#f4f3f0',
                enableZoom: true,
                hoverColor: '#c9dfaf',
                hoverOpacity: null,
                normalizeFunction: 'linear',
                scaleColors: ['#b6d6ff', '#005ace'],
                selectedColor: '#c9dfaf',
                selectedRegions: null,
                showTooltip: true,
                onRegionClick: function(element, code, region)
                {
                    $.ajax({
                        url: `/api/countries/${code}`,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            let content, flag;
                            if (response.success == false) {
                                content = 'Tapylmady';
                                flag = false;
                            } else {
                                content = `
                                    <b>Paýtagy: </b> ${response.info.capital}<br><br>
                                    <b>Tutýan meýdany: </b> ${response.info.area}<br><br>
                                    <b>Döwlet dolandyrylyşy: </b> ${response.info.consitutional_form}<br><br>
                                    <b>Prezidenti: </b> ${response.info.president}<br><br>
                                    <b>Ilaty: </b> ${response.info.population}
                                `;
                                if (flag == null) {
                                    flag = `/storage/countries/${code}.png`;
                                } else {
                                    flag = response.info.flag.replace('public', '/storage');
                                }
                            }
                            swal({
                                title: `${region} (${code})`,
                                text: content,
                                html: true,
                                confirmButtonText: "Ýap",
                                imageUrl: flag,
                            }); 
                        }
                    });
                },
            });
        })
    </script>
@stop
