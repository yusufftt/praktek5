@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <h1>Buku Tamu</h1>
    </div>
    <div class="flex flex-wrap mt-6 -mx-3 justify-center items-center h-screen">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                        <h6>Jumlah daftar tamu</h6>
                        <p class="mb-0 text-sm leading-normal">
                            <i class="fa fa-check text-cyan-500"></i>
                            <span class="ml-1 font-semibold">290 tamu</span>
                            minggu ini
                        </p>
                        </div>
                        <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                        <div class="relative pr-6 lg:float-right">
                            <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-slate-400"></i>
                            </a>
                            <p class="hidden transform-dropdown-show"></p>

                            <ul dropdown-menu class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                            <li class="relative">
                                <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Action</a>
                            </li>
                            <li class="relative">
                                <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Another action</a>
                            </li>
                            <li class="relative">
                                <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Something else here</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                            <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Hari</th>
                            <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Tamu</th>
                            <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Pendapatan</th>
                            <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Total Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">Senin</h6>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                     src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="team1" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Ryan Tompson
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-2.jpg" class="w-full rounded-full" alt="team2" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Romina Hadid
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="team3" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Alexander Smith
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="team4" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Jessica Doe
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <span class="text-xs font-semibold leading-tight"> Rp 8.567.470 </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="w-3/4 mx-auto">
                                <div>
                                    <div>
                                    <span class="text-xs font-semibold leading-tight">60%</span>
                                    </div>
                                </div>
                                <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                <div>
                                    
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">Selasa</h6>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-2.jpg" class="w-full rounded-full" alt="team5" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Romina Hadid
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="team6" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Jessica Doe
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <span class="text-xs font-semibold leading-tight"> Rp 1.005.785 </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="w-3/4 mx-auto">
                                <div>
                                    <div>
                                    <span class="text-xs font-semibold leading-tight">10%</span>
                                    </div>
                                </div>
                                <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                <div>
                                
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">Rabu</h6>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="team8" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Romina Hadid
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="team9" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Jessica Doe
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <span class="text-xs font-semibold leading-tight"> Rp 10.843.104 </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="w-3/4 mx-auto">
                                <div>
                                    <div>
                                    <span class="text-xs font-semibold leading-tight">100%</span>
                                    </div>
                                </div>
                                <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                <div>
                                
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">Kamis</h6>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user1" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Ryan Tompson
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="user2" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Romina Hadid
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user3" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Alexander Smith
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="user4" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Jessica Doe
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <span class="text-xs font-semibold leading-tight"> Rp 10.843.104 </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="w-3/4 mx-auto">
                                <div>
                                    <div>
                                    <span class="text-xs font-semibold leading-tight">100%</span>
                                    </div>
                                </div>
                                <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                <div>
                                    
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">Jumat</h6>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user5" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Ryan Tompson
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <span class="text-xs font-semibold leading-tight"> Rp 3.971.045 </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="w-3/4 mx-auto">
                                <div>
                                    <div>
                                    <span class="text-xs font-semibold leading-tight">25%</span>
                                    </div>
                                </div>
                                <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                <div class="flex px-2 py-1">
                                <div>
                                    
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">Sabtu</h6>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="user6" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Ryan Tompson
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                                    <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user7" />
                                </a>
                                <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                                    Jessica Doe
                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                </div>
                                </div>
                            </td>
                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-0 whitespace-nowrap">
                                <span class="text-xs font-semibold leading-tight"> Rp 6.890.600 </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                <div class="w-3/4 mx-auto">
                                <div>
                                    <div>
                                    <span class="text-xs font-semibold leading-tight">40%</span>
                                    </div>
                                </div>
                                <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
            © <script>document.write(new Date().getFullYear() + ",");</script> made with <i class="fa fa-heart"></i> by <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
          <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
        
@endsection