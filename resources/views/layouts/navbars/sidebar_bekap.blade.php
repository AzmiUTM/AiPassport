<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('argon') }}/img/brand/myaims-menu-logo.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items : Begin -->
                <ul class="navbar-nav">
                    <!-- Nav items : Begin Dashboard Menu -->
                    <li class="nav-item {{ $elementName == 'dashboards' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">{{ __('Dashboard') }}</span>
                        </a>
                    </li>
                    <!-- Nav items : End Dashboard Menu -->

                    <!-- Nav items : Begin Academic Menu -->
                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                        'GRP_ADM_ACD', 'ADMIN', 'GRP_VIEWER', 'GRP_UTMI', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE',
                        'GRP_PROGRAMME_OWNER', 'GRP_COURSE_OWNER'])
                        <li class="nav-item {{ $parentSectionMain == 'academic' ? 'active' : '' }}">
                            <a class="nav-link" href="#navbar-academic" data-toggle="collapse" role="button"
                                aria-expanded="{{ $parentSectionMain == 'academic' ? 'true' : '' }}"
                                aria-controls="navbar-academic">
                                <i class="ni ni-hat-3 text-primary"></i>
                                <span class=" nav-link-text">{{ __('Academic') }}</span>
                            </a>
                            <div class="collapse {{ $parentSectionMain == 'academic' ? 'show' : '' }}" id="navbar-academic">
                                <ul class="nav nav-sm flex-column">

                                    <!-- Nav items : Begin Search Student Menu -->
                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                        'GRP_ADM_ACD', 'ADMIN', 'GRP_VIEWER', 'GRP_UTMI', 'GRP_TDA_DEKAN'])
                                        <li class="nav-item {{ $elementName == 'search-student' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('academic.basicInfo.studentSearch.index') }}">
                                                <span class="nav-link-text">{{ __('Search Student') }}</span>
                                            </a>
                                        </li>
                                        <!-- Nav items : End Search Student Menu -->

                                        <!-- Nav items : Begin Academic : Student Info Menu -->
                                        @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                            'GRP_ADM_ACD', 'ADMIN', 'GRP_VIEWER', 'GRP_UTMI', 'GRP_TDA_DEKAN'])
                                            <li class="nav-item {{ $parentSection == 'student-info' ? 'active' : '' }}">
                                                <a href="#navbar-academic-student-info" class="nav-link" data-toggle="collapse"
                                                    role="button"
                                                    aria-expanded="{{ $parentSection == 'student-info' ? 'true' : '' }}"
                                                    aria-controls="navbar-academic-student-info">
                                                    <span class="nav-link-text">{{ __('Student Info') }}</span></a>
                                                <div class="collapse {{ $parentSection == 'student-info' ? 'show' : '' }}"
                                                    id="navbar-academic-student-info" style="">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item {{ $elementName == 'personal-info' ? 'active' : '' }}">
                                                            <a href="{{ route('academic.basicInfo.personalInfo.index') }}"
                                                                class="nav-link">{{ __('Personal Info') }}</a>
                                                        </li>
                                                        <li
                                                            class="nav-item {{ $elementName == 'academic-record' ? 'active' : '' }}">
                                                            <a href="{{ route('academic.basicInfo.academicRecord.index') }}"
                                                                class="nav-link">{{ __('Academic Record') }}</a>
                                                        </li>
                                                        {{-- <!-- @role(['GRP_UTMI']) --> --}}
                                                        <li class="nav-item {{ $elementName == 'student-pass' ? 'active' : '' }}">
                                                            <a href="{{ route('academic.basicInfo.studentPass.index') }}"
                                                                class="nav-link">{{ __('Student Pass') }}</a>
                                                        </li>
                                                        {{-- <!-- @endrole --> --}}
                                                        <li
                                                            class="nav-item {{ $elementName == 'medical-report' ? 'active' : '' }}">
                                                            <a href="{{ route('academic.basicInfo.medicalReport.index') }}"
                                                                class="nav-link">{{ __('Medical Report') }}</a>
                                                        </li>
                                                        <li
                                                            class="nav-item {{ $elementName == 'working-experience' ? 'active' : '' }}">
                                                            <a href="{{ route('workingExperience.index') }}"
                                                                class="nav-link">{{ __('Working Experience') }}</a>
                                                        </li>
                                                        <li class="nav-item {{ $elementName == 'digital-file' ? 'active' : '' }}">
                                                            <a href="{{ route('digitalFile.index') }}"
                                                                class="nav-link">{{ __('Digital File') }}</a>
                                                        </li>
                                                        <li class="nav-item {{ $elementName == 'cross-campus' ? 'active' : '' }}">
                                                            <a href="{{ route('crossCampus.index') }}"
                                                                class="nav-link">{{ __('Cross Campus') }}</a>
                                                        </li>
                                                        @if (App::environment('DEV', 'STG', 'PROD'))
                                                            {{-- Update by Hanie : 27/01/2023 : PENUTUPAN SEMENTARA SISTEM KEWANGAN PELAJAR DAN PAYMENT GATEWAY-STUDENT  --}}
                                                            <li
                                                                class="nav-item {{ $elementName == 'debt-details' ? 'active' : '' }}">
                                                                <a href="{{ route('debtDetails.index', 'null') }}"
                                                                    class="nav-link">{{ __('Financial Status') }}</a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </li>
                                        @endrole
                                    @endrole
                                    <!-- Nav items : End Academic : Student Info Menu-->

                                    <!-- Nav items : Begin Academic : Semester Information Menu -->
                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                        'GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN'])
                                        <li class="nav-item {{ $parentSection == 'semester-info' ? 'active' : '' }}">
                                            <a href="#navbar-academic-schedule" class="nav-link" data-toggle="collapse"
                                                role="button"
                                                aria-expanded="{{ $parentSection == 'semester-info' ? 'true' : '' }}"
                                                aria-controls="navbar-academic-schedule">
                                                <span class="nav-link-text">{{ __('Semester') }}</span></a>
                                            <div class="collapse {{ $parentSection == 'semester-info' ? 'show' : '' }}"
                                                id="navbar-academic-schedule" style="">
                                                <ul class="nav nav-sm flex-column">
                                                    <li
                                                        class="nav-item {{ $elementName == 'semester-individu' ? 'active' : '' }}">
                                                        <a href="{{ route('semester.index') }}"
                                                            class="nav-link">{{ __('Individual Semester') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'semester-individu-new' ? 'active' : '' }}">
                                                        <a href="{{ route('newStudentRegister.index') }}"
                                                            class="nav-link">{{ __('New Student Registration') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'semester-changeProgramme' ? 'active' : '' }}">
                                                        <a href="{{ route('semester.changeProgindex') }}"
                                                            class="nav-link">{{ __('Change Programme') }}</a>
                                                    </li>
                                                    @role(['GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_ADM_ACD', 'ADMIN'])
                                                        <li
                                                            class="nav-item {{ $parentSection == 'semester-info' ? 'active' : '' }}">
                                                            <a href="#navbar-academic-schedule" class="nav-link"
                                                                data-toggle="collapse" role="button"
                                                                aria-expanded="{{ $parentSection == 'semester-info' ? 'true' : '' }}"
                                                                aria-controls="navbar-academic-schedule">
                                                                <span
                                                                    class="nav-link-text">{{ __('Create Semester by Batch') }}</span>
                                                            </a>
                                                            <div class="collapse {{ $parentSection == 'semester-info' ? 'show' : '' }}"
                                                                id="navbar-academic-schedule" style="">
                                                                <ul class="nav nav-sm flex-column">
                                                                    <li
                                                                        class="nav-item {{ $elementName == 'semester-batch-ug' ? 'active' : '' }}">
                                                                        <a href="{{ route('semester.indexBatchUg', ['none', 'none']) }}"
                                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Undergraduate') }}</a>
                                                                    </li>
                                                                    <li
                                                                        class="nav-item {{ $elementName == 'semester-batch-pg' ? 'active' : '' }}">
                                                                        <a href="{{ route('semester.indexBatchPg', ['none', 'none']) }}"
                                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Postgraduate') }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    @endrole
                                                </ul>
                                            </div>
                                        </li>
                                    @endrole
                                    <!-- Nav items : End Academic : Semester Information Menu-->

                                    <!-- Nav items : Begin Academic : Programme & Course Menu -->
                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                        'GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN'])
                                        <li class="nav-item {{ $parentSection == 'programme-course' ? 'active' : '' }}">
                                            <a href="#navbar-academic-programme-course" class="nav-link"
                                                data-toggle="collapse" role="button"
                                                aria-expanded="{{ $parentSection == 'programme-course' ? 'true' : '' }}"
                                                aria-controls="navbar-academic-programme-course">
                                                <span
                                                    class="nav-link-text">{{ __('Programme & Curriculum Matters') }}</span></a>
                                            <div class="collapse {{ $parentSection == 'programme-course' ? 'show' : '' }}"
                                                id="navbar-academic-programme-course" style="">
                                                <ul class="nav nav-sm flex-column">
                                                    <li
                                                        class="nav-item {{ $elementName == 'programme-registration' ? 'active' : '' }}">
                                                        <a href="{{ route('programme.index') }}"
                                                            class="nav-link">{{ __('Programme Record') }}</a>
                                                    </li>
                                                    @role(['GRP_EDIT_CLUSTER', 'ADMIN', 'GRP_TP_PEG_AMD', 'GRP_TNCA'])
                                                        <li
                                                            class="nav-item {{ $elementName == 'programme-kluster' ? 'active' : '' }}">

                                                            <a href="{{ route('programme.kluster') }}"
                                                                class="nav-link">{{ __('Programme Cluster') }}</a>
                                                        </li>
                                                    @endrole
                                                    <li
                                                        class="nav-item {{ $elementName == 'curriculum-registration' ? 'active' : '' }}">
                                                        <a href="{{ route('curriculum.index') }}"
                                                            class="nav-link">{{ __('Curriculum Record') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'course-registration' ? 'active' : '' }}">
                                                        <a href="{{ route('course.index') }}"
                                                            class="nav-link">{{ __('Course Record') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'curriculum-courses-registration' ? 'active' : '' }}">
                                                        <a href="{{ route('curriculumCourses.searchCurriculum') }}"
                                                            class="nav-link">{{ __('Curriculum Structure') }}</a>
                                                        {{-- <!-- <a href="{{ route('curriculumCourses.searchCurriculum') }}"
                                                    class="nav-link">{{ __('Curriculum Registration') }}</a> --> --}}
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'professional-bodies' ? 'active' : '' }}">
                                                        <a href="{{ route('proBodies.index') }}"
                                                            class="nav-link">{{ __('Professional Bodies') }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    @endrole
                                    <!-- Nav items : End Academic : Programme & Course Menu-->

                                    <!-- Nav items : Begin Academic : Courses Offer Menu -->
                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                        'GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN'])
                                        <li class="nav-item {{ $parentSection == 'courses' ? 'active' : '' }}">
                                            <a href="#navbar-academic-course-offer" class="nav-link" data-toggle="collapse"
                                                role="button"
                                                aria-expanded="{{ $parentSection == 'courses' ? 'true' : '' }}"
                                                aria-controls="navbar-academic-course-offer">
                                                <span
                                                    class="nav-link-text">{{ __('Courses Registration Matters') }}</span></a>
                                            <div class="collapse {{ $parentSection == 'courses' ? 'show' : '' }}"
                                                id="navbar-academic-course-offer" style="">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item {{ $elementName == 'course-offer' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.courseOffer.coursesOffer') }}"
                                                            class="nav-link">{{ __('Course Offers') }}</a>
                                                    </li>
                                                    @role(['GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'ADMIN'])
                                                        <li class="nav-item {{ $elementName == 'capp-setting' ? 'active' : '' }}">
                                                            <a href="{{ route('cappingSetting.index') }}"
                                                                class="nav-link">{{ __('Reset Capping') }}</a>
                                                        </li>
                                                    @endrole
                                                    <li
                                                        class="nav-item {{ $elementName == 'pre-assign-course' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.coursePreAssign.coursePreAssign') }}"
                                                            class="nav-link">{{ __('Pre-Assign Courses') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'pre-assign-editing-process' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.coursePreAssignRedaction.coursePreAssignRedaction') }}"
                                                            class="nav-link">{{ __('Pre-Assign Editing Process') }}</a>
                                                    </li>
                                                    @role(['ADMIN'])
                                                        <li
                                                            class="nav-item {{ $elementName == 'pre-course-registration' ? 'active' : '' }}">
                                                            <a href="{{ route('academic.courses.coursePreReg.coursePreReg') }}"
                                                                class="nav-link">{{ __('Course Registration (Upcoming Semester)') }}</a>
                                                        </li>
                                                    @endrole
                                                    <li
                                                        class="nav-item {{ $elementName == 'course-registration' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.courseRegistration.courseRegistration') }}"
                                                            class="nav-link">{{ __('Course Registration') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'course-service-distribution' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.courseSvcReg.courseSvcDist') }}"
                                                            class="nav-link">{{ __('Service Learning Distribution') }}</a>
                                                        {{-- <!-- <a href="{{ route('academic.courses.courseSvcReg.courseSvcDist') }}"
                                                    class="nav-link">{{ __('Course Service Registration') }}</a> --> --}}
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'course-lecturer-registration' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.courseLecturerReg.courseLecturerReg') }}"
                                                            class="nav-link">{{ __('Courses Lecturer Registration') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'external-lecturer' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.externalLecturer.index') }}"
                                                            class="nav-link">{{ __('External Lecturer Record') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'course-prerequisite' ? 'active' : '' }}">
                                                        <a href="{{ route('academic.courses.coursePrerequisite.index') }}"
                                                            class="nav-link">{{ __('Course Prerequisite') }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    @endrole
                                    <!-- Nav items : End Academic : Courses Offer Menu-->

                                    <!-- Nav items : Begin Academic : Credit Transfer Student -->
                                    <!-- Update by Hanie - tukar role Kerani Fakulti Kepada Admin Sahaja  -->

                                    {{-- <!--<li
                                    class="nav-item {{ $parentSection == 'credit-transfer-coordinator-student' ? 'active' : '' }}">
                                <a href="#navbar-academic-credit-transfer-student" class="nav-link"
                                    data-toggle="collapse" role="button"
                                    aria-expanded="{{ $parentSection == 'credit-transfer-student' ? 'true' : '' }}"
                                    aria-controls="navbar-academic-credit-transfer--student">
                                    <span class="nav-link-text">{{ __('Credit Transfer - Student') }}</span></a>
                                <div class="collapse {{ $parentSection == 'credit-transfer-student' ? 'show' : '' }}"
                                    id="navbar-academic-credit-transfer-student" style="">
                                    <ul class="nav nav-sm flex-column">
                                        <li
                                            class="nav-item {{ $elementName == 'list-application-student' ? 'active' : '' }}">
                                            <a href="{{ route('creditTransfer.indexStudent') }}"
                                                class="nav-link">{{ __('List Application') }}</a>
                                        </li>
                                        <li
                                            class="nav-item {{ $elementName == 'credit-report-student' ? 'active' : '' }}">
                                            <a href="{{ route('creditTransfer.indexReport') }}"
                                                class="nav-link">{{ __('Report / Statistic') }}</a>
                                        </li>
                                    </ul>
                                </div>
                    </li>--> --}}
                                    <!-- Nav items : End Academic : Credit Transfer Student -->
                                    {{-- <!-- @if (App::environment('DEV', 'STG')) --> --}}
                                    @role(['ADMIN', 'GRP_KER_FAKULTI', 'GRP_PEG_FAKULTI', 'GRP_TP_PEG_FAK', 'GRP_KER_AMD',
                                        'GRP_TP_PEG_AMD', 'GRP_TDA_DEKAN']) <!--'GRP_PELULUS_PK','PENSYARAH'-->
                                        <!-- Nav items : Begin Academic : Credit Transfer Fakulti -->
                                        <!-- Update by Hanie - tukar role Pensyarah Kepada Admin Sahaja  -->
                                        <li class="nav-item {{ $parentSection == 'credit-transfer-admin' ? 'active' : '' }}">
                                            <a href="#navbar-academic-credit-transfer-admin" class="nav-link"
                                                data-toggle="collapse" role="button"
                                                aria-expanded="{{ $parentSection == 'credit-transfer-admin' ? 'true' : '' }}"
                                                aria-controls="navbar-academic-credit-transfer-admin">
                                                <span class="nav-link-text">{{ __('Credit Transfer Matters') }}</span></a>
                                            <div class="collapse {{ $parentSection == 'credit-transfer-admin' ? 'show' : '' }}"
                                                id="navbar-academic-credit-transfer-admin" style="">
                                                <ul class="nav nav-sm flex-column">
                                                    @role(['GRP_KER_FAKULTI', 'GRP_PEG_FAKULTI', 'GRP_TP_PEG_FAK',
                                                        'GRP_TDA_DEKAN'])
                                                        <li
                                                            class="nav-item {{ $elementName == 'list-application-admin' ? 'active' : '' }}">
                                                            <a href="{{ route('creditTransfer.index') }}"
                                                                class="nav-link">{{ __('List Application by Faculty') }}</a>
                                                        </li>
                                                        <li
                                                            class="nav-item {{ $elementName == 'list-application-faculty' ? 'active' : '' }}">
                                                            <a href="{{ route('creditTransfer.applicationList') }}"
                                                                class="nav-link">{{ __('Manual Transfer Credit') }}</a>
                                                        </li>
                                                    @endrole
                                                    @role(['ADMIN', 'GRP_KER_AMD', 'GRP_TP_PEG_AMD'])
                                                        <!---->
                                                        <li
                                                            class="nav-item {{ $elementName == 'list-application-advisor' ? 'active' : '' }}">
                                                            <a href="{{ route('creditTransfer.indexAdvisor') }}"
                                                                class="nav-link">{{ __('List Application by Admin') }}</a>
                                                        </li>
                                                        <li
                                                            class="nav-item {{ $elementName == 'approval-list-amd' ? 'active' : '' }}">
                                                            <a href="{{ route('creditTransfer.indexAmd') }}"
                                                                class="nav-link">{{ __('Assign Approval') }}</a>
                                                        </li>
                                                    @endrole
                                                    @role(['ADMIN'])
                                                        <li
                                                            class="nav-item {{ $elementName == 'amendment-category-transfer' ? 'active' : '' }}">
                                                            <a href="{{ route('creditTransfer.amendmentCatTransfer') }}"
                                                                class="nav-link">{{ __('Amendment Category Transfer') }}</a>
                                                        </li>
                                                    @endrole
                                                    {{-- <!-- @role('GRP_PELULUS_PK')
                                <li
                                    class="nav-item {{ $elementName == 'list-application-coordinator' ? 'active' : '' }}">
                                    <a href="{{ route('creditTransfer.indexCoordinator') }}"
                                        class="nav-link">{{ __('List Application by Approval') }}</a>
                                </li>
                                @endrole
                                @role('PENSYARAH')
                                <li
                                    class="nav-item {{ $elementName == 'list-application-advisor' ? 'active' : '' }}">
                                    <a href="{{ route('creditTransfer.indexAdvisor') }}"
                                        class="nav-link">{{ __('List Application by Advisor') }}</a>
                                </li>
                                @endrole --> --}}
                                                </ul>
                                            </div>
                                        </li>
                                    @endrole
                                    {{-- <!-- @endif --> --}}

                                    <!-- @role(['GRP_PELULUS_PK', 'PENSYARAH'])
        -->
                                        <!-- Nav items : Begin Academic : Credit Transfer Pelulus dan PA -->
                                        <!-- <li class="nav-item {{ $parentSection == 'credit-transfer-coordinator' ? 'active' : '' }}">
                                <a href="#navbar-academic-credit-transfer-coordinator" class="nav-link" data-toggle="collapse"
                                    role="button"
                                    aria-expanded="{{ $parentSection == 'credit-transfer-coordinator' ? 'true' : '' }}"
                                    aria-controls="navbar-academic-credit-transfer-coordinator">
                                    <span class="nav-link-text">{{ __('Credit Transfer Matters') }}</span></a>
                                <div class="collapse {{ $parentSection == 'credit-transfer-coordinator' ? 'show' : '' }}"
                                    id="navbar-academic-credit-transfer-coordinator" style="">
                                    <ul class="nav nav-sm flex-column">

                                    </ul>
                                </div>
                            </li>
    @endrole -->

                                    <!-- Nav items : Begin Academic : Schedule Menu -->
                                    {{-- <!-- <li class="nav-item {{ $parentSection == 'schedule' ? 'active' : '' }}">
        <a href="#navbar-academic-schedule" class="nav-link" data-toggle="collapse" role="button"
            aria-expanded="{{ $parentSection == 'schedule' ? 'true' : '' }}" aria-controls="navbar-academic-schedule">
            <span class="nav-link-text">{{ __('Schedule') }}</span></a>
        <div class="collapse {{ $parentSection == 'schedule' ? 'show' : '' }}" id="navbar-academic-schedule" style="">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="#!" class="nav-link ">{{ __('Thirdlevelmenu') }}</a>
                </li>
            </ul>
        </div>
        </li> --> --}}
                                    <!-- Nav items : End Academic : Schedule Menu-->

                                    <!-- Nav items : Begin Academic : timetable Menu -->
                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                        'GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN'])
                                        <li class="nav-item {{ $parentSection == 'timetable_matters' ? 'active' : '' }}">
                                            <a href="#navbar-academic-timetable" class="nav-link" data-toggle="collapse"
                                                role="button"
                                                aria-expanded="{{ $parentSection == 'timetable_matters' ? 'true' : '' }}"
                                                aria-controls="navbar-academic-timetable">
                                                <span class="nav-link-text">{{ __('Timetable Matters') }}</span></a>
                                            <div class="collapse {{ $parentSection == 'timetable_matters' ? 'show' : '' }}"
                                                id="navbar-academic-timetable">
                                                <ul class="nav nav-sm flex-column">
                                                    <li
                                                        class="nav-item {{ $parentSection == 'timetable_matters' ? 'active' : '' }}">
                                                        <a href="#navbar-academic-timetable" class="nav-link"
                                                            data-toggle="collapse" role="button"
                                                            aria-expanded="{{ $parentSection == 'timetable_matters' ? 'true' : '' }}"
                                                            aria-controls="navbar-academic-timetable">
                                                            <span
                                                                class="nav-link-text">{{ __('Timetable Management') }}</span></a>
                                                        <div class="collapse {{ $parentSection == 'timetable_matters' ? 'show' : '' }}"
                                                            id="navbar-academic-timetable" style="">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li
                                                                    class="nav-item {{ $elementName == 'room-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('room.index') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('Room Record') }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'building-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('building.index') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('Building Record') }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'slot-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('slot.index') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('Slot Record') }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'timetable-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('timetable.index') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('Timetable') }}<br>&nbsp;&nbsp;&nbsp;{{ 'Information' }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'Uploadexcel-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('timetable.showJabKuliah') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('Upload Excel') }}</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $parentSection == 'timetable_matters' ? 'active' : '' }}">
                                                        <a href="#navbar-academic-timetable" class="nav-link"
                                                            data-toggle="collapse" role="button"
                                                            aria-expanded="{{ $parentSection == 'timetable_matters' ? 'true' : '' }}"
                                                            aria-controls="navbar-academic-timetable">
                                                            <span class="nav-link-text">{{ __('Timetable Report') }}</span>
                                                        </a>
                                                        <div class="collapse {{ $parentSection == 'timetable_matters' ? 'show' : '' }}"
                                                            id="navbar-academic-timetable" style="">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li
                                                                    class="nav-item {{ $elementName == 'lecturertimetable-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('timetable.lecturer') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('By Lecturer') }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'roomtimetable-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('timetable.room') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('By Room') }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'coursetimetable-Info' ? 'active' : '' }}">
                                                                    <a href="{{ route('timetable.courses') }}"
                                                                        class="nav-link ">&nbsp;&nbsp;&nbsp;{{ __('By Course') }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'ClashTimetable-Lec' ? 'active' : '' }}">
                                                                    <a href="{{ route('timetable.clashLec') }}"
                                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Clash Timetable') }}<br>&nbsp;&nbsp;&nbsp;{{ 'Lecturer' }}</a>
                                                                </li>
                                                                <li
                                                                    class="nav-item {{ $elementName == 'ClashTimetable-Stud' ? 'active' : '' }}">
                                                                    <a href="{{ route('timetable.clashStud') }}"
                                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Clash Timetable') }}<br>&nbsp;&nbsp;&nbsp;{{ 'Student' }}</a>
                                                                </li>
                                                                {{-- <!-- <li class="nav-item {{ $elementName == 'programmetimetable-Info' ? 'active' : '' }}">
                                    <a href="{{ route('timetable.program') }}" class="nav-link ">&nbsp;&nbsp;&nbsp;{{__('Programme')}}<br>&nbsp;&nbsp;&nbsp;{{('Timetable') }}</a>
                                </li> --> --}}
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    @endrole
                                    <!-- Nav items : End Academic : timetable Menu-->

                                    <!-- Nav items : Begin Academic : Examination Menu - Faculty  -->
                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                        'GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN']) {{-- PENSYARAH --}}
                                        <li class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                                            <a href="#navbar-academic-examination-faculty" class="nav-link"
                                                data-toggle="collapse" role="button"
                                                aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                                                aria-controls="navbar-academic-examination-faculty">
                                                <span class="nav-link-text">{{ __('Examination Matters') }}</span></a>
                                            <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                                                id="navbar-academic-examination-faculty" style="">
                                                <ul class="nav nav-sm flex-column">
                                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD',
                                                        'GRP_TNCA', 'GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN'])
                                                        <li
                                                            class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                                                            <a href="#navbar-academic-examination-faculty" class="nav-link"
                                                                data-toggle="collapse" role="button"
                                                                aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                                                                aria-controls="navbar-academic-examination-faculty">
                                                                <span class="nav-link-text">{{ __('By Faculty') }}</span></a>
                                                            <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                                                                id="navbar-academic-examination-faculty" style="">
                                                                <ul class="nav nav-sm flex-column">
                                                                    <li
                                                                        class="nav-item {{ $elementName == 'mark-entry' ? 'active' : '' }}">
                                                                        <a href="{{ route('examination.indexMarkEntry') }}"
                                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Mark Record') }}</a>
                                                                    </li>
                                                                    <li
                                                                        class="nav-item {{ $elementName == 'result-correction' ? 'active' : '' }}">
                                                                        <a href="{{ route('examination.index') }}"
                                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Result Correction') }}</a>
                                                                    </li>
                                                                    <li
                                                                        class="nav-item {{ $elementName == 'exam-result' ? 'active' : '' }}">
                                                                        <a href="{{ route('examination.indexExaminationResult') }}"
                                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Individual Result') }}</a>
                                                                    </li>

                                                                    <!-- PREP BEGIN -->
                                                                    <li
                                                                        class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                                                                        <a href="#navbar-academic-examination-faculty"
                                                                            class="nav-link" data-toggle="collapse"
                                                                            role="button"
                                                                            aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                                                                            aria-controls="navbar-academic-examination-faculty">
                                                                            <span
                                                                                class="nav-link-text">&nbsp;&nbsp;&nbsp;{{ __('PREP Matters') }}</span>
                                                                        </a>
                                                                        <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                                                                            id="navbar-academic-examination-faculty"
                                                                            style="">
                                                                            <ul class="nav nav-sm flex-column">
                                                                                <li
                                                                                    class="nav-item {{ $elementName == 'prep-temp-data' ? 'active' : '' }}">
                                                                                    <a href="{{ route('examination.prepTemp') }}"
                                                                                        class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('PREP Temporary') }}</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Data') }}</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nav-item {{ $elementName == 'prep-process' ? 'active' : '' }}">
                                                                                    <a href="{{ route('examination.prepProcess') }}"
                                                                                        class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('PREP Process') }}</a>
                                                                                </li>
                                                                                <li
                                                                                    class="nav-item {{ $elementName == 'prep-report' ? 'active' : '' }}">
                                                                                    <a href="{{ route('examination.prepReport') }}"
                                                                                        class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('PREP Report') }}</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <!-- PREP END -->
                                                                    @role(['GRP_ADM_ACD', 'ADMIN', 'GRP_TP_PEG_FAK',
                                                                        'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                                                        'GRP_TDA_DEKAN'])
                                                                        <li
                                                                            class="nav-item {{ $elementName == 'exam-stud-prob' ? 'active' : '' }}">
                                                                            <a href="{{ route('examination.indexStudProb') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Problem Result List') }}</a>
                                                                        </li>
                                                                    @endrole
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    @endrole
                                                    {{-- <!-- @role('PENSYARAH')
                <li class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                    <a href="#navbar-academic-examination-faculty" class="nav-link" data-toggle="collapse" role="button"
                        aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                        aria-controls="navbar-academic-examination-faculty">
                        <span class="nav-link-text">{{__('By Lecturer') }}</span></a>
                    <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                        id="navbar-academic-examination-faculty" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item {{ $elementName == 'mark-entry-lecturer' ? 'active' : '' }}">
                                <a href="{{ route('examination.indexMarkEntryLect') }}"
                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{__('Mark Record') }}</a>
                            </li>
                            <li class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                                <a href="#navbar-academic-examination-faculty" class="nav-link" data-toggle="collapse"
                                    role="button" aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                                    aria-controls="navbar-academic-examination-faculty">
                                    <span class="nav-link-text">&nbsp;&nbsp;&nbsp;{{__('OBE') }}</span>
                                </a>
                                <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                                    id="navbar-academic-examination-faculty" style="">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item {{ $elementName == 'Key_In_Mark_ICGPA' ? 'active' : '' }}">
                                            <a href=""
                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('Key In Mark ICGPA')}}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'CAR_Verification' ? 'active' : '' }}">
                                            <a href=""
                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('CAR Verification') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                @endrole --> --}}
                                                </ul>
                                            </div>
                                        </li>
                                    @endrole
                                    <!-- Nav items : End Academic : Examination Menu - Faculty-->
                                    @if (App::environment('DEV', 'STG', 'PROD', 'local') || session('system_auth_staffid') == '7794')
                                        {{-- @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD', 'ADMIN', 'PENSYARAH', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE']) --}}
                                        @role(['GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE',
                                            'GRP_PROGRAMME_OWNER', 'GRP_COURSE_OWNER'])
                                            <!-- Nav items : Begin Academic : OBE -->
                                            <li class="nav-item {{ $parentSection == 'OBE' ? 'active' : '' }}">
                                                <a href="#navbar-academic-obe" class="nav-link" data-toggle="collapse"
                                                    role="button"
                                                    aria-expanded="{{ $parentSection == 'OBE' ? 'true' : '' }}"
                                                    aria-controls="navbar-academic-obe">
                                                    <span class="nav-link-text">{{ __('OBE ') }}</span></a>
                                                <div class="collapse {{ $parentSection == 'OBE' ? 'show' : '' }}"
                                                    id="navbar-academic-obe" style="">
                                                    <ul class="nav nav-sm flex-column">

                                                        <li class="nav-item {{ $parentSection == 'OBE' ? 'active' : '' }}">
                                                            <a href="#navbar-academic-obe" class="nav-link"
                                                                data-toggle="collapse" role="button"
                                                                aria-expanded="{{ $parentSection == 'OBE' ? 'true' : '' }}"
                                                                aria-controls="navbar-academic-obe">
                                                                <span
                                                                    class="nav-link-text">{{ __('Program Infomation') }}</span>
                                                            </a>
                                                            <div class="collapse {{ $parentSection == 'OBE' ? 'show' : '' }}"
                                                                id="navbar-academic-obe" style="">
                                                                <ul class="nav nav-sm flex-column">
                                                                    @role(['ADMIN', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE',
                                                                        'GRP_PROGRAMME_OWNER'])
                                                                        <li
                                                                            class="nav-item {{ $elementName == 'Program_info' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.proginfo') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Program Info') }}</a>
                                                                        </li>

                                                                        <li
                                                                            class="nav-item {{ $elementName == 'Program_details' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.programdetails') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Program Details') }}</a>
                                                                        </li>
                                                                    @endrole
                                                                    <li
                                                                        class="nav-item {{ $elementName == 'CAR_Verification' ? 'active' : '' }}">
                                                                        <a href="{{ route('obeAdmin.searchWeightage') }}"
                                                                            class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Weightage') }}</a>
                                                                    </li>
                                                                    @role(['ADMIN', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE',
                                                                        'GRP_PROGRAMME_OWNER', 'GRP_COURSE_OWNER'])
                                                                        <li
                                                                            class="nav-item {{ $elementName == 'CAR_Verification' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.courseList') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Course') }}</a>
                                                                        </li>
                                                                    @endrole
                                                                    @role(['ADMIN', 'GRP_ADM_OBE'])
                                                                        <li
                                                                            class="nav-item {{ $elementName == 'APAER_info' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.frmapaer') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('APAER') }}</a>
                                                                        </li>
                                                                    @endrole
                                                                    @role(['ADMIN', 'GRP_ADM_OBE'])
                                                                        <li
                                                                            class="nav-item {{ $parentSection == 'OBE' ? 'active' : '' }}">
                                                                            <a href="#navbar-academic-obe" class="nav-link"
                                                                                data-toggle="collapse" role="button"
                                                                                aria-expanded="{{ $parentSection == 'OBE' ? 'true' : '' }}"
                                                                                aria-controls="navbar-academic-obe">
                                                                                <span
                                                                                    class="nav-link-text">{{ __('Report') }}</span>
                                                                            </a>

                                                                        <li
                                                                            class="nav-item {{ $elementName == 'report' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.ploReport') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Achivement by PLO') }}</a>
                                                                        </li>

                                                                        <li
                                                                            class="nav-item {{ $elementName == 'report' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.cloReport') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Achivement by CLO') }}</a>
                                                                        </li>

                                                                        <li
                                                                            class="nav-item {{ $elementName == 'report' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.kimReport') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('KIM Report') }}</a>
                                                                        </li>

                                                                        <li
                                                                            class="nav-item {{ $elementName == 'report' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.carReport') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('CAR Report') }}</a>
                                                                        </li>

                                                                        <li
                                                                            class="nav-item {{ $elementName == 'report' ? 'active' : '' }}">
                                                                            <a href="{{ route('obeAdmin.parReport') }}"
                                                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('PAR Report') }}</a>
                                                                        </li>
                                                            </li>
                                                        @endrole
                                                    </ul>
                                                </div>
                                            </li>
                                            @role(['ADMIN', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE', 'GRP_PROGRAMME_OWNER'])
                                                <li class="nav-item {{ $elementName == 'list_of_mark' ? 'active' : '' }}">
                                                    <a href="{{ route('obeAdmin.listOfMarkIndex') }}"
                                                        class="nav-link">{{ __('List Of Mark') }}</a>
                                                </li>
                                                <li class="nav-item {{ $elementName == 'transcript' ? 'active' : '' }}">
                                                    <a href="" class="nav-link">{{ __('Transcript') }}</a>
                                                </li>
                                            @endrole
                                            @role(['ADMIN', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE', 'GRP_PROGRAMME_OWNER',
                                                'GRP_COURSE_OWNER'])
                                                <!--<li class="nav-item {{ $elementName == 'car' ? 'active' : '' }}">
                                    <a href=""
                                        class="nav-link">{{ __('CAR') }}</a>
                                </li>-->
                                                <!--ZURAIDAYAHYA 13/12/2023-->
                                                <li class="nav-item {{ $parentSection == 'OBE' ? 'active' : '' }}">
                                                    <a href="#navbar-academic-obe" class="nav-link" data-toggle="collapse"
                                                        role="button"
                                                        aria-expanded="{{ $parentSection == 'OBE' ? 'true' : '' }}"
                                                        aria-controls="navbar-academic-obe">
                                                        <span class="nav-link-text">{{ __('CAR') }}</span>
                                                    </a>

                                                <li class="nav-item {{ $elementName == 'car' ? 'active' : '' }}">
                                                    <a href="{{ route('obeAdmin.CAR.indexCAR') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('CAR Verification') }}</a>
                                                </li>

                                </li>
                            @endrole
                            @role(['ADMIN', 'GRP_TDA_DEKAN', 'GRP_ADM_OBE', 'GRP_PROGRAMME_OWNER'])
                                @if (App::environment('local', 'DEV', 'STG'))
                                    <li class="nav-item {{ $elementName == 'par' ? 'active' : '' }}">
                                        <a href="{{ route('obeAdmin.par') }}" class="nav-link">{{ __('PAR') }}</a>
                                    </li>
                                @endif
                            @endrole
                        </ul>
                    </div>
                    </li>
                @endrole
                @endif

                {{-- <li class="nav-item {{ $parentSection == 'OBE' ? 'active' : '' }}">
            <a href="navbar-academic-OBE" class="nav-link" data-toggle="collapse" role="button"
                aria-expanded="{{ $parentSection == 'OBE' ? 'true' : '' }}" aria-controls="navbar-academic-OBE">
                <span class="nav-link-text">{{ __('OBE') }}</span></a>
            <div class="collapse {{ $parentSection == 'OBE' ? 'show' : '' }}" id="navbar-academic-OBE" style="">
                <ul class="nav nav-sm flex-column">

                    <li class="nav-item {{ $elementName == 'List Of Mark' ? 'active' : '' }}">
                        <a href=""
                            class="nav-link">{{ __('List Of Mark') }}</a>
                    </li>

                </ul>
            </div>
        </li> --}}
                <!-- Nav items : End Academic : Letter Setting -->
                <!-- Nav items : Begin Academic : Examination Menu - Lecturer  -->
                {{-- <!-- @role('PENSYARAH')
                <li class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                    <a href="#navbar-academic-examination-lecturer" class="nav-link" data-toggle="collapse" role="button"
                        aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                        aria-controls="navbar-academic-examination-lecturer">
                        <span class="nav-link-text">{{ __('By Lecturer') }}</span></a>
                    <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                        id="navbar-academic-examination-lecturer" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item {{ $elementName == 'mark-entry-lecturer' ? 'active' : '' }}">
                                <a href="{{ route('examination.indexMarkEntryLect') }}"
                                    class="nav-link">{{ __('Mark Record') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endrole  --> --}}
                <!-- Nav items : End Academic : Examination Menu - Lecturer-->

                <!-- Nav items : Begin Academic : Graduation Application Menu -->
                @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_KER_AMD', 'GRP_TP_PEG_AMD', 'ADMIN', 'GRP_TDA_DEKAN'])
                    <li class="nav-item {{ $parentSection == 'graduate_application' ? 'active' : '' }}">
                        <a href="#navbar-academic-graduate-application" class="nav-link" data-toggle="collapse"
                            role="button" aria-expanded="{{ $parentSection == 'graduate_application' ? 'true' : '' }}"
                            aria-controls="navbar-academic-graduate-application">
                            <span class="nav-link-text">{{ __('Graduand Matters') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'graduate_application' ? 'show' : '' }}"
                            id="navbar-academic-graduate-application" style="">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $parentSection == 'graduate_application' ? 'active' : '' }}">
                                    <a href="#navbar-academic-graduate-application" class="nav-link" data-toggle="collapse"
                                        role="button"
                                        aria-expanded="{{ $parentSection == 'graduate_application' ? 'true' : '' }}"
                                        aria-controls="navbar-academic-graduate-application">
                                        <span class="nav-link-text">{{ __('Application Record') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'graduate_application' ? 'show' : '' }}"
                                        id="navbar-academic-graduate-application" style="">
                                        <ul class="nav nav-sm flex-column">
                                            @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_KER_AMD', 'GRP_TP_PEG_AMD',
                                                'ADMIN', 'UAT_USER'])
                                                {{-- @if (App::environment('DEV', 'STG'))   --}}
                                                {{-- @if (auth()->user()->hasRole('UAT_USER')) --}}
                                                <li class="nav-item {{ $elementName == 'graduate_lulus' ? 'active' : '' }}">
                                                    <a href="{{ route('graduate.indexLulusGrad') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ '[Plan A]' }}<br>&nbsp;&nbsp;&nbsp;{{ __('Nomination for Graduation') }}</a>
                                                </li>

                                                <li class="nav-item {{ $elementName == 'graduate_faculty' ? 'active' : '' }}">
                                                    <a href="{{ route('graduate.indexfacPlanA', ['NONE', 'NONE']) }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ '[Plan A]' }}<br>&nbsp;&nbsp;&nbsp;{{ __('Approval for Graduation') }}</a>
                                                </li>
                                                {{-- @endif --}}
                                                {{-- <li class="nav-item {{ $elementName == 'graduate_listfaculty' ? 'active' : '' }}">
                                <a href="{{ route('graduate.indexfac',['NONE','NONE']) }}"
                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{__('Eligible Graduand') }}</a>
                            </li> --}}
                                                <li
                                                    class="nav-item {{ $elementName == 'graduate_listfaculty' ? 'active' : '' }}">
                                                    <a href="{{ route('graduate.indexfac', ['NONE', 'NONE']) }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ '[Plan B]' }}<br>&nbsp;&nbsp;&nbsp;{{ __('Eligible Graduand') }}</a>
                                                </li>
                                            @endrole
                                            @role(['GRP_KER_AMD', 'GRP_TP_PEG_AMD', 'ADMIN'])
                                                <li class="nav-item {{ $elementName == 'graduate_list' ? 'active' : '' }}">
                                                    <a href="{{ route('graduate.index', ['NONE', 'NONE']) }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Verification List') }}</a>
                                                </li>
                                            @endrole
                                            <li class="nav-item {{ $elementName == 'graduate_report' ? 'active' : '' }}">
                                                <a href="{{ route('graduate.indexReport', ['NONE', 'NONE']) }}"
                                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Graduand') }}<br>&nbsp;&nbsp;&nbsp;{{ 'Application' }}<br>&nbsp;&nbsp;&nbsp;{{ 'Report' }}</a>
                                            </li>
                                            @role(['GRP_KER_AMD', 'GRP_TP_PEG_AMD', 'ADMIN'])
                                                <li class="nav-item {{ $elementName == 'Transcript_info' ? 'active' : '' }}">
                                                    <a href="{{ route('transcriptInfo.index') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Transcript ') }}</a>
                                                </li>
                                            @endrole
                                            @if (App::environment('DEV', 'STG'))
                                                @role(['ADMIN'])
                                                    <li
                                                        class="nav-item {{ $elementName == 'graduate_acadAdvisor' ? 'active' : '' }}">
                                                        <a href="{{ route('graduate.acadAdv') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Academic Advisor') }}<br>&nbsp;&nbsp;&nbsp;{{ 'Approval' }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'graduate_faculty' ? 'active' : '' }}">
                                                        <a href="{{ route('graduate.indexfacPlanA', ['NONE', 'NONE']) }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Faculty Approval') }}</a>
                                                    </li>
                                                @endrole
                                            @endif

                                            @role(['GRP_KER_AMD', 'GRP_TP_PEG_AMD', 'ADMIN'])
                                                <li class="nav-item {{ $elementName == 'graduate_mg' ? 'active' : '' }}">
                                                    <a href="{{ route('graduate.caseMg') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ '[Plan A]' }}<br>&nbsp;&nbsp;&nbsp;{{ __('Amendment Case MG') }}</a>
                                                </li>
                                            @endrole
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole

                @role(['ADMIN'])
                    <li class="nav-item {{ $parentSection == 'attendance' ? 'active' : '' }}">
                        <a href="#navbar-attendance" class="nav-link" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'attendance' ? 'true' : '' }}"
                            aria-controls="navbar-attendance">
                            <span class="nav-link-text">{{ __('Attendance') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'attendance' ? 'show' : '' }}" id="navbar-attendance"
                            style="">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'slide' ? 'active' : '' }}">
                                    <a href="{{ route('attendance.index') }}"
                                        class="nav-link">{{ __('Manual Slide') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole

                {{-- <!-- <li class="nav-item {{ $parentSection == 'graduate_application' ? 'active' : '' }}">
        <a href="#navbar-academic-graduate-application" class="nav-link" data-toggle="collapse"
        role="button" aria-expanded="{{ $parentSection == 'graduate_application' ? 'true' : '' }}"
        aria-controls="navbar-academic-graduate-application">
            <span class="nav-link-text">{{ __('Application Record') }}</span>
        </a>
        <div class="collapse {{ $parentSection == 'graduate_application' ? 'show' : '' }}"
        id="navbar-academic-graduate-application" style="">
            <ul class="nav nav-sm flex-column">
                @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_KER_AMD', 'GRP_TP_PEG_AMD', 'ADMIN'])
                <li class="nav-item {{ $elementName == 'graduate_listfaculty' ? 'active' : '' }}">
                    <a href="{{ route('graduate.indexfac',['NONE','NONE']) }}"
                        class="nav-link">{{ __('Eligible Graduand') }}</a>
                </li>
                @endrole
                @role(['GRP_KER_AMD', 'GRP_TP_PEG_AMD', 'ADMIN'])
                <li class="nav-item {{ $elementName == 'graduate_list' ? 'active' : '' }}">
                    <a href="{{ route('graduate.index',['NONE','NONE']) }}"
                        class="nav-link">{{ __('Verification List') }}</a>
                </li>
                @endrole
                <li class="nav-item {{ $elementName == 'graduate_report' ? 'active' : '' }}">
                    <a href="{{ route('graduate.indexReport',['NONE','NONE']) }}"
                        class="nav-link">{{ __('Graduand Application Report') }}</a>
                </li>
                @role(['GRP_KER_AMD', 'GRP_TP_PEG_AMD', 'ADMIN'])
                <li class="nav-item {{ $elementName == 'Transcript_info' ? 'active' : '' }}">
                    <a href="{{ route('transcriptInfo.index') }}"
                                class="nav-link">{{ __('Transcript ') }}</a>
                                </li>
                @endrole
            </ul>
        </div>
    </li> --> --}}


                <!-- Nav items : End Academic : Graduation Application Menu-->

                <!-- Nav items : Begin Academic : Report Exam  -->
                @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD',
                    'ADMIN', 'GRP_VIEWER', 'GRP_TDA_DEKAN'])
                    <li class="nav-item {{ $parentSection == 'report_matters' ? 'active' : '' }}">
                        <a href="#navbar-academic-report-exam" class="nav-link" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'report_matters' ? 'true' : '' }}"
                            aria-controls="navbar-academic-report-exam">
                            <span class="nav-link-text">{{ __('Report') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'report_matters' ? 'show' : '' }}"
                            id="navbar-academic-report-exam">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $parentSection == 'report_matters' ? 'active' : '' }}">
                                    <a href="#navbar-academic-report-exam" class="nav-link" data-toggle="collapse"
                                        role="button"
                                        aria-expanded="{{ $parentSection == 'report_matters' ? 'true' : '' }}"
                                        aria-controls="navbar-academic-report-exam">
                                        <span class="nav-link-text">{{ __('Examination Slip') }}</span>
                                    </a>
                                    <div class="collapse  {{ $parentSection == 'report_matters' ? 'show' : '' }}"
                                        id="navbar-academic-report-exam" style="">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item {{ $elementName == 'senarai-lembaga-ug' ? 'active' : '' }}">
                                                <a href="{{ route('examination.slipUg') }}"
                                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Undergraduate') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'senarai-lembaga-pg' ? 'active' : '' }}">
                                                <a href="{{ route('examination.slipPg') }}"
                                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Postgraduate') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                    'GRP_ADM_ACD', 'ADMIN', 'GRP_TDA_DEKAN'])
                                    <li class="nav-item {{ $elementName == 'marks-status' ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('reportExam.indexMarksStatus') }}"
                                            class="nav-link">{{ __('Marks Status') }}</a>
                                    </li>
                                    <li class="nav-item {{ $elementName == 'cpacgpa-status' ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('examination.cpacgpa') }}"
                                            class="nav-link">{{ __('CPA / CGPA List') }}</a>
                                    </li>
                                    <li class="nav-item {{ $parentSection == 'report_matters' ? 'active' : '' }}">
                                        <a href="#navbar-academic-report-exam" class="nav-link" data-toggle="collapse"
                                            role="button"
                                            aria-expanded="{{ $parentSection == 'report_matters' ? 'true' : '' }}"
                                            aria-controls="navbar-academic-report-exam">
                                            <span class="nav-link-text">{{ __('JKAF Report') }}</span>
                                        </a>
                                        <div class="collapse {{ $parentSection == 'report_matters' ? 'show' : '' }}"
                                            id="navbar-academic-report-exam" style="">
                                            <ul class="nav nav-sm flex-column">
                                                <li
                                                    class="nav-item {{ $elementName == 'senarai-lembaga-ug-jka' ? 'active' : '' }}">
                                                    <a href="{{ route('reportExam.indexListLembagaUG') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Undergraduate') }}</a>
                                                </li>
                                                <li
                                                    class="nav-item {{ $elementName == 'senarai-lembaga-pg-jka' ? 'active' : '' }}">
                                                    <a href="{{ route('reportExam.indexListLembagaPG') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Postgraduate') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item {{ $parentSection == 'report_matters' ? 'active' : '' }}">
                                        <a href="#navbar-academic-report-exam" class="nav-link" data-toggle="collapse"
                                            role="button"
                                            aria-expanded="{{ $parentSection == 'report_matters' ? 'true' : '' }}"
                                            aria-controls="navbar-academic-report-exam">
                                            <span class="nav-link-text">{{ __('Senate Report') }}</span>
                                        </a>
                                        <div class="collapse {{ $parentSection == 'report_matters' ? 'show' : '' }}"
                                            id="navbar-academic-report-exam" style="">
                                            <ul class="nav nav-sm flex-column">
                                                <!-- LEMBAGA SENATE BEGIN -->
                                                <li class="nav-item {{ $elementName == 'lembaga-senat-ug' ? 'active' : '' }}">
                                                    <a href="{{ route('reportExam.indexLembagaSenateUG') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Undergraduate') }}</a>
                                                </li>
                                                <li class="nav-item {{ $elementName == 'lembaga-senat-pg' ? 'active' : '' }}">
                                                    <a href="{{ route('reportExam.indexLembagaSenatePG') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Postgraduate') }}</a>
                                                </li>
                                                <!-- LEMBAGA SENATE END -->
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- modul LI start -->
                                    <li class="nav-item {{ $parentSection == 'report_matters' ? 'active' : '' }}">
                                        <a href="#navbar-academic-report-exam" class="nav-link" data-toggle="collapse"
                                            role="button"
                                            aria-expanded="{{ $parentSection == 'report_matters' ? 'true' : '' }}"
                                            aria-controls="navbar-academic-report-exam">
                                            <span class="nav-link-text">{{ __('Industrial Training') }}</span>
                                        </a>
                                        <div class="collapse {{ $parentSection == 'report_matters' ? 'show' : '' }}"
                                            id="navbar-academic-report-exam" style="">
                                            <ul class="nav nav-sm flex-column">
                                                <!-- Sub modul LI start-->
                                                <li class="nav-item {{ $elementName == 'List-LI' ? 'active' : '' }}">
                                                    <a href="{{ route('li.List') }}"
                                                        class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Industrial Training List') }}</a>
                                                </li>
                                                {{-- <li class="nav-item {{ $elementName == 'lembaga-senat-pg' ? 'active' : '' }}">
                                <a href=""
                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Postgraduate') }}</a>
                            </li> --}}
                                                <!-- Sub modul LI end -->
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- modul LI end -->
                                @endrole
                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Academic : Report Exam -->

                <!-- Nav items : Begin Academic : Research Menu -->
                @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD',
                    'ADMIN'])
                    {{-- <!-- <li class="nav-item {{ $parentSection == 'research' ? 'active' : '' }}">
        <a href="#navbar-academic-research" class="nav-link" data-toggle="collapse" role="button"
            aria-expanded="{{ $parentSection == 'research' ? 'true' : '' }}" aria-controls="navbar-academic-research">
            <span class="nav-link-text">{{ __('Research') }}</span></a>
        <div class="collapse {{ $parentSection == 'research' ? 'show' : '' }}" id="navbar-academic-research" style="">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item {{ $elementName == 'maklumat-penilai' ? 'active' : '' }}">
                    <a href="{{ route('academic.research.maklumatPenilai.index') }}"
                        class="nav-link">{{ __('Maklumat Penilai') }}</a>
                </li>
                <li class="nav-item {{ $elementName == 'maklumat-nht' ? 'active' : '' }}">
                    <a href="{{ route('academic.research.notisHantarTesis.index') }}"
                        class="nav-link">{{ __('Notis Hantar Tesis') }}</a>
                </li>
                <li class="nav-item {{ $elementName == 'maklumat-pensyarah' ? 'active' : '' }}">
                    <a href="{{ route('academic.research.maklumatPensyarah.index') }}"
                        class="nav-link">{{ __('Pensyarah/Penyelia') }}</a>
                </li>
                <li class="nav-item {{ $elementName == 'maklumat-viva' ? 'active' : '' }}">
                    <a href="{{ route('academic.research.viva.index') }}" class="nav-link">{{ __('VIVA') }}</a>
                </li>
            </ul>
        </div>
    </li> --> --}}
                    <!-- Nav items : End Academic : Research Menu-->

                    <!-- Nav items : Begin Academic : Letter Setting -->
                    <li class="nav-item {{ $parentSection == 'misc-setting' ? 'active' : '' }}">
                        <a href="#navbar-academic-lettersetting" class="nav-link" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'misc-setting' ? 'true' : '' }}"
                            aria-controls="navbar-academic-lettersetting">
                            <span class="nav-link-text">{{ __('Misc. Settings') }}</span></a>
                        <div class="collapse {{ $parentSection == 'misc-setting' ? 'show' : '' }}"
                            id="navbar-academic-lettersetting" style="">
                            <ul class="nav nav-sm flex-column">
                                {{-- <li class="nav-item {{ $elementName == 'letter-pic' ? 'active' : '' }}">
                    <a href="{{ route('letter.indexletter') }}"
                        class="nav-link">{{ __('Person In Charge') }}</a>
                </li> --}}
                                <li class="nav-item {{ $elementName == 'letter-template' ? 'active' : '' }}">
                                    <a href="{{ route('letter.indexletter') }}"
                                        class="nav-link">{{ __('Letter Template') }}</a>
                                </li>
                                @role(['ADMIN'])
                                    <li class="nav-item {{ $elementName == 'cronjob-status' ? 'active' : '' }}">
                                        <a href="{{ route('acadCron.index') }}"
                                            class="nav-link">{{ __('Academic Cronjob') }}</a>
                                    </li>
                                @endrole
                            </ul>
                        </div>
                    </li>
                    <!-- Nav items : End Academic : Letter Setting -->
                @endrole

                <!-- Nav items : Begin Academic : Hostel Menu -->
                {{-- <!-- <li class="nav-item {{ $parentSection == 'hostel' ? 'active' : '' }}">
    <a href="#navbar-academic-hostel" class="nav-link" data-toggle="collapse" role="button"
        aria-expanded="{{ $parentSection == 'hostel' ? 'true' : '' }}" aria-controls="navbar-academic-hostel">
        <span class="nav-link-text">{{ __('Hostel') }}</span></a>
    <div class="collapse {{ $parentSection == 'hostel' ? 'show' : '' }}" id="navbar-academic-hostel" style="">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="#!" class="nav-link ">{{ __('Thirdlevelmenu') }}</a>
            </li>
        </ul>
    </div>
    </li> --> --}}
                <!-- Nav items : End Academic : Hostel Menu-->

                <!-- Nav items : Begin Academic : Graduation Menu -->
                {{-- <!--<li class="nav-item {{ $parentSection == 'graduation' ? 'active' : '' }}">
    <a href="#navbar-academic-graduation" class="nav-link" data-toggle="collapse" role="button"
        aria-expanded="{{ $parentSection == 'graduation' ? 'true' : '' }}" aria-controls="navbar-academic-graduation">
        <span class="nav-link-text">{{ __('Graduation') }}</span></a>
    <div class="collapse {{ $parentSection == 'graduation' ? 'show' : '' }}" id="navbar-academic-graduation" style="">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="#!" class="nav-link ">{{ __('Thirdlevelmenu') }}</a>
            </li>
        </ul>
    </div>
    </li>--> --}}
                <!-- Nav items : End Academic : Graduation Menu-->

                <!-- Nav items : Begin Academic : Alumni Menu -->
                {{-- <!--<li class="nav-item {{ $parentSection == 'alumni' ? 'active' : '' }}">
    <a href="#navbar-academic-alumni" class="nav-link" data-toggle="collapse" role="button"
        aria-expanded="{{ $parentSection == 'alumni' ? 'true' : '' }}" aria-controls="navbar-academic-alumni">
        <span class="nav-link-text">{{ __('Alumni') }}</span></a>
    <div class="collapse {{ $parentSection == 'alumni' ? 'show' : '' }}" id="navbar-academic-alumni" style="">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="#!" class="nav-link ">{{ __('Thirdlevelmenu') }}</a>
            </li>
        </ul>
    </div>
    </li>--> --}}
                <!-- Nav items : End Academic : Alumni Menu-->
                </ul>
            </div>
            </li>
        @endrole
        <!-- Nav items : End Academic Menu-->

        <!-- Nav items : Begin Lecturer Menu -->
        @role(['PENSYARAH', 'GRP_PELULUS_PK'])
            <li class="nav-item {{ $parentSectionMain == 'academic-advisor' ? 'active' : '' }}">
                <a class="nav-link" href="#navbar-academic-advisor" data-toggle="collapse" role="button"
                    aria-expanded="{{ $parentSectionMain == 'academic-advisor' ? 'true' : '' }}"
                    aria-controls="navbar-academic-advisor">
                    <i class="ni ni-hat-3 text-primary"></i>
                    <span class=" nav-link-text">{{ __('Academic Advisor') }}</span>
                </a>
                <div class="collapse {{ $parentSection == 'academic-advisor' ? 'show' : '' }}"
                    id="navbar-academic-advisor" style="">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ $parentSection == 'credit-transfer-admin' ? 'active' : '' }}">
                            <a href="#navbar-academic-credit-transfer-admin" class="nav-link" data-toggle="collapse"
                                role="button"
                                aria-expanded="{{ $parentSection == 'credit-transfer-admin' ? 'true' : '' }}"
                                aria-controls="navbar-academic-credit-transfer-admin">
                                <span class="nav-link-text">{{ __('Credit Transfer Matters') }}</span></a>
                            <div class="collapse {{ $parentSection == 'credit-transfer-admin' ? 'show' : '' }}"
                                id="navbar-academic-credit-transfer-admin" style="">
                                <ul class="nav nav-sm flex-column">
                                    @role(['GRP_PELULUS_PK'])
                                        <li
                                            class="nav-item {{ $elementName == 'list-application-coordinator' ? 'active' : '' }}">
                                            <a href="{{ route('creditTransfer.indexCoordinator') }}"
                                                class="nav-link">{{ __('List Application by Approval') }}</a>
                                        </li>
                                    @endrole
                                    @role(['PENSYARAH'])
                                        <li
                                            class="nav-item {{ $elementName == 'list-application-advisor' ? 'active' : '' }}">
                                            <a href="{{ route('creditTransfer.indexAdvisor') }}"
                                                class="nav-link">{{ __('List Application by Advisor') }}</a>
                                        </li>
                                    @endrole
                                </ul>
                            </div>
                        </li>
                        {{-- @if (App::environment('DEV', 'STG')) --}}
                        {{-- <li
                        class="nav-item {{ $elementName == 'proses-graduan' ? 'active' : '' }}">
                        <a href="{{ route('prosesGraduanAdvisor.index') }}"
                            class="nav-link">{{ __('Graduate Application') }}</a>
                    </li> --}}
                        <li class="nav-item {{ $elementName == 'graduate_acadAdvisor' ? 'active' : '' }}">
                            <a href="{{ route('graduate.acadAdv') }}"
                                class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Graduate Application') }}</a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                    <div>
            </li>
        @endrole
        @if (session('system_auth_staffid') == '7794' ||
                session('system_auth_staffid') == '11453' ||
                session('system_auth_staffid') == '7023' ||
                session('system_auth_staffid') == '8690' ||
                session('system_auth_staffid') == '6230' ||
                session('system_auth_staffid') == '8641' ||
                session('system_auth_staffid') == '8630')
            <li class="nav-item {{ $parentSectionMain == 'examination_matters' ? 'active' : '' }}">
                <a class="nav-link" href="#navbar-academic-examination-faculty" data-toggle="collapse"
                    role="button" aria-expanded="{{ $parentSectionMain == 'examination_matters' ? 'true' : '' }}"
                    aria-controls="navbar-academic-examination-faculty">
                    <i class="ni ni-hat-3 text-primary"></i>
                    <span class=" nav-link-text">{{ __('Examination Matters') }}</span>
                </a>
                <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                    id="navbar-academic-examination-faculty" style="">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ $elementName == 'mark-entry-lecturer' ? 'active' : '' }}">
                            <a href="{{ route('examination.indexMarkEntryLect') }}"
                                class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Mark Record') }}</a>
                        </li>
                        {{-- App::environment('DEV','STG')|| || session('system_auth_staffid') == "7794" --}}
                        @if (session('system_auth_staffid') == '7794' ||
                                session('system_auth_staffid') == '11453' ||
                                session('system_auth_staffid') == '7023' ||
                                session('system_auth_staffid') == '8690' ||
                                session('system_auth_staffid') == '6230' ||
                                session('system_auth_staffid') == '8641' ||
                                session('system_auth_staffid') == '8630')
                            <li class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                                <a href="#navbar-academic-examination-faculty" class="nav-link"
                                    data-toggle="collapse" role="button"
                                    aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                                    aria-controls="navbar-academic-examination-faculty">
                                    <span class="nav-link-text">&nbsp;&nbsp;&nbsp;{{ __('OBE') }}</span>
                                </a>
                                <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                                    id="navbar-academic-examination-faculty" style="">
                                    <ul class="nav nav-sm flex-column">
                                        <li
                                            class="nav-item {{ $elementName == 'Key_In_Mark_ICGPA' ? 'active' : '' }}">
                                            <a href="{{ route('obeLecturer.keyinmark') }}"
                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Key In Mark') }}</a>
                                        </li>

                                        <li
                                            class="nav-item {{ $elementName == 'CAR_Verification' ? 'active' : '' }}">
                                            <a href=""
                                                class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('CAR Verification') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                    </ul>
                    <div>
            </li>
        @else
            @role(['PENSYARAH'])
                <li class="nav-item {{ $parentSectionMain == 'examination_matters' ? 'active' : '' }}">
                    <a class="nav-link" href="#navbar-academic-examination-faculty" data-toggle="collapse"
                        role="button" aria-expanded="{{ $parentSectionMain == 'examination_matters' ? 'true' : '' }}"
                        aria-controls="navbar-academic-examination-faculty">
                        <i class="ni ni-hat-3 text-primary"></i>
                        <span class=" nav-link-text">{{ __('Examination Matters') }}</span>
                    </a>
                    <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                        id="navbar-academic-examination-faculty" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item {{ $elementName == 'mark-entry-lecturer' ? 'active' : '' }}">
                                <a href="{{ route('examination.indexMarkEntryLect') }}"
                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Mark Record') }}</a>
                            </li>
                            @if (App::environment('DEV', 'STG'))
                                <li class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                                    <a href="#navbar-academic-examination-faculty" class="nav-link"
                                        data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                                        aria-controls="navbar-academic-examination-faculty">
                                        <span class="nav-link-text">&nbsp;&nbsp;&nbsp;{{ __('OBE') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                                        id="navbar-academic-examination-faculty" style="">
                                        <ul class="nav nav-sm flex-column">
                                            <li
                                                class="nav-item {{ $elementName == 'Key_In_Mark_ICGPA' ? 'active' : '' }}">
                                                <a href=""
                                                    class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Key In Mark ICGPA') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'CAR_Verification' ? 'active' : '' }}">
                                                <a href=""
                                                    class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('CAR Verification') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        </ul>
                        <div>
                </li>
            @endrole
        @endif
        {{-- @role(['PENSYARAH'])
    <li class="nav-item {{ $parentSectionMain == 'examination_matters' ? 'active' : '' }}">
        <a class="nav-link" href="#navbar-academic-examination-faculty" data-toggle="collapse" role="button"
            aria-expanded="{{ $parentSectionMain == 'examination_matters' ? 'true' : '' }}"
            aria-controls="navbar-academic-examination-faculty">
            <i class="ni ni-hat-3 text-primary"></i>
            <span class=" nav-link-text">{{ __('Examination Matters') }}</span>
        </a>
        <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                id="navbar-academic-examination-faculty" style="">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ $elementName == 'mark-entry-lecturer' ? 'active' : '' }}">
                        <a href="{{ route('examination.indexMarkEntryLect') }}"
                            class="nav-link">&nbsp;&nbsp;&nbsp;{{__('Mark Record') }}</a>
                    </li>
                    @if (App::environment('DEV', 'STG'))
                    <li class="nav-item {{ $parentSection == 'examination_matters' ? 'active' : '' }}">
                        <a href="#navbar-academic-examination-faculty" class="nav-link" data-toggle="collapse"
                            role="button" aria-expanded="{{ $parentSection == 'examination_matters' ? 'true' : '' }}"
                            aria-controls="navbar-academic-examination-faculty">
                            <span class="nav-link-text">&nbsp;&nbsp;&nbsp;{{__('OBE') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'examination_matters' ? 'show' : '' }}"
                            id="navbar-academic-examination-faculty" style="">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'Key_In_Mark_ICGPA' ? 'active' : '' }}">
                                    <a href=""
                                        class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('Key In Mark ICGPA')}}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'CAR_Verification' ? 'active' : '' }}">
                                    <a href=""
                                        class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('CAR Verification') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                </ul>
        <div>
    </li>
    @endrole --}}
        <!-- Nav items : End Lecturer Menu -->

        {{-- @if (App::environment('DEV', 'STG')) --}}
        @role(['ADMIN', 'GRP_EPPPK_ADMIN', 'PENSYARAH', 'GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TDA_DEKAN'])
            <li class="nav-item {{ $parentSectionMain == 'epppk' ? 'active' : '' }}">
                <a class="nav-link" href="#navbar-epppk" data-toggle="collapse" role="button"
                    aria-expanded="{{ $parentSectionMain == 'epppk' ? 'true' : '' }}" aria-controls="navbar-epppk">
                    <i class="ni ni-hat-3 text-primary"></i>
                    <span class=" nav-link-text">{{ __('ePPPK') }}</span>
                </a>
                <div class="collapse {{ $parentSectionMain == 'epppk' ? 'show' : '' }}" id="navbar-epppk">
                    <ul class="nav nav-sm flex-column">
                        @role(['ADMIN', 'GRP_EPPPK_ADMIN'])
                            <li class="nav-item {{ $elementName == 'epppk_config' ? 'active' : '' }}">
                                <a href="{{ route('epppk.index') }}" class="nav-link">{{ __('Configuration') }}</a>
                            </li>
                        @endrole
                    </ul>
                    <ul class="nav nav-sm flex-column">
                        @role(['ADMIN', 'GRP_EPPPK_ADMIN', 'PENSYARAH', 'GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI',
                            'GRP_TDA_DEKAN'])
                            <li class="nav-item {{ $elementName == 'epppk_report' ? 'active' : '' }}">
                                <a href="{{ route('epppk.report') }}" class="nav-link">{{ __('Report') }}</a>
                            </li>
                        @endrole
                    </ul>
                </div>
            </li>
        @endrole
        {{-- @endif --}}
        {{-- @if (App::environment('DEV', 'STG'))  --}}
        @role(['GRP_KPS', 'ADMIN'])
            <li class="nav-item {{ $parentSectionMain == 'KPS Kad_Prihatin_Siswa' ? 'active' : '' }}">
                <a class="nav-link" href="#navbar-kps" data-toggle="collapse" role="button"
                    aria-expanded="{{ $parentSectionMain == 'Kad_Prihatin_Siswa' ? 'true' : '' }}"
                    aria-controls="navbar-kps">
                    <i class="ni ni-hat-3 text-primary"></i>
                    <span class=" nav-link-text">{{ __('KPS Admin') }}</span>
                </a>
                <div class="collapse {{ $parentSectionMain == 'Kad_Prihatin_Siswa' ? 'show' : '' }}" id="navbar-kps">
                    <ul class="nav nav-sm flex-column">
                        <!-- Nav items : Begin Search Student Menu -->
                        <li class="nav-item {{ $elementName == 'KPS_list' ? 'active' : '' }}">
                            <a href="{{ route('kps.kpsList') }}" class="nav-link">{{ __('KPS List') }}</a>
                        </li>
                        <li class="nav-item {{ $elementName == 'KPS_MYQR' ? 'active' : '' }}">
                            <a href="{{ route('kps.myQR') }}"
                                class="nav-link">{{ __('MY QR - Student Digital ID') }}</a>
                        </li>
                    </ul>
                </div>
            </li>
        @endrole
        @if (App::environment('DEV', 'STG', 'PROD'))
            @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'ADMIN', 'GRP_ITS_UTMCC',
                'GRP_ITS_SUPERVISOR', 'GRP_ITS_INT_SUPERVISOR'])
                <li class="nav-item {{ $parentSectionMain == 'Industrial_Training' ? 'active' : '' }}">
                    <a class="nav-link" href="#navbar-its" data-toggle="collapse" role="button"
                        aria-expanded="{{ $parentSectionMain == 'Industrial_Training' ? 'true' : '' }}"
                        aria-controls="navbar-its">
                        <i class="ni ni-hat-3 text-primary"></i>
                        <span class=" nav-link-text">{{ __('Industrial Training') }}</span>
                    </a>
                    <div class="collapse {{ $parentSectionMain == 'Industrial_Training' ? 'show' : '' }}"
                        id="navbar-its">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item {{ $parentSection == 'its-pcp' ? 'active' : '' }}">
                                <a class="nav-link" href="#navbar-its-pcp" data-toggle="collapse" role="button"
                                    aria-expanded="{{ $parentSection == 'its-pcp' ? 'true' : '' }}"
                                    aria-controls="navbar-its-pcp">
                                    <span class="nav-link-text">{{ __('Programme Configuration Placement') }}</span>
                                </a>
                                <div class="collapse {{ $parentSection == 'its-pcp' ? 'show' : '' }}"
                                    id="navbar-its-pcp">
                                    <ul class="nav nav-sm flex-column">
                                        @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'ADMIN',
                                            'GRP_ITS_UTMCC'])
                                            <li class="nav-item {{ $elementName == 'Programme_Config' ? 'active' : '' }}">
                                                <a href="{{ route('its.progConfig', ['NONE', 'NONE']) }}"
                                                    class="nav-link">{{ __('Programme Configuration') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'Placement_Application' ? 'active' : '' }}">
                                                <a href="{{ route('its.placementApp', ['NONE', 'NONE']) }}"
                                                    class="nav-link">{{ __('Placement Application') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'Placement_Appeal' ? 'active' : '' }}">
                                                <a href="{{ route('its.placementAppeal', ['NONE', 'NONE']) }}"
                                                    class="nav-link">{{ __('Placement Appeal') }}</a>
                                            </li>
                                        @endrole
                                        @role(['GRP_ITS_INT_SUPERVISOR'])
                                            <li class="nav-item {{ $elementName == 'Log_Its_Spv' ? 'active' : '' }}">
                                                <a href="{{ route('its.log.indexSpv') }}"
                                                    class="nav-link">{{ __('Log Book Verification') }}</a>
                                            </li>
                                        @endrole
                                        @role(['GRP_ITS_SUPERVISOR'])
                                            <!-- Nav items : Begin ITS Menu SUPERVISOR -->
                                            <li class="nav-item {{ $elementName == 'Log_Its_Sv' ? 'active' : '' }}">
                                                <a href="{{ route('its.log.indexSv') }}"
                                                    class="nav-link">{{ __('Log Book Verification') }}</a>
                                            </li>
                                        @endrole
                                    </ul>
                                </div>
                            </li>
                            <!-- Nav items : Duty Verification SV External Menu -->
                            @role(['GRP_ITS_SUPERVISOR'])
                                <li class="nav-item {{ $elementName == 'Duty_Its_Sv' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('its.duty.indexSv') }}">
                                        <span class="nav-link-text">{{ __('Duty Verification') }}</span>
                                    </a>
                                </li>
                            @endrole
                            <!-- Nav items : End Duty Verification SV External Menu -->
                            <!-- Nav items : Duty Verification Admin/Pnyelaras ITS Menu -->
                            @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'ADMIN'])
                                <li class="nav-item {{ $elementName == 'Duty_Its' ? 'active' : '' }}">
                                    <a href="{{ route('its.duty') }}" class="nav-link">{{ __('Duty Verification') }}</a>
                                </li>
                            @endrole
                            <!-- Nav items : End Duty Verification Admin/Pnyelaras ITS -->
                            <li class="nav-item {{ $elementName == 'its_company' ? 'active' : '' }}">
                                @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_KERANI'])
                                    <a href="{{ route('its.company') }}"
                                        class="nav-link">{{ __('Company Information') }}</a>
                                @endrole
                                @role(['GRP_ITS_ILEAGUE', 'ADMIN', 'GRP_ITS_UTMCC'])
                                    <a href="{{ route('its.companyCC') }}"
                                        class="nav-link">{{ __('Company Information') }}</a>
                                @endrole
                            </li>
                            @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'ADMIN'])
                                <li class="nav-item {{ $parentSection == 'sv-man' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-sv-man" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'sv-man' ? 'true' : '' }}"
                                        aria-controls="navbar-sv-man">
                                        <span class="nav-link-text">{{ __('Supervision Management') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'sv-man' ? 'show' : '' }}" id="navbar-sv-man">
                                        <ul class="nav nav-sm flex-column">
                                            @role(['GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'ADMIN'])
                                                <li class="nav-item {{ $elementName == 'its-appointment' ? 'active' : '' }}">
                                                    <a href="{{ route('its.appointment.index') }}"
                                                        class="nav-link">{{ __('Appointment') }}</a>
                                                </li>
                                            @endrole
                                            @role(['GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'GRP_ITS_PENYELARAS', 'ADMIN'])
                                                <li class="nav-item {{ $elementName == 'its-svAssign' ? 'active' : '' }}">
                                                    <a href="{{ route('its.svAssign.index') }}"
                                                        class="nav-link">{{ __('Supervisor Assign') }}</a>
                                                </li>
                                                <li class="nav-item {{ $elementName == 'its-coorGrp' ? 'active' : '' }}">
                                                    <a href="{{ route('its.coGrp.index') }}"
                                                        class="nav-link">{{ __('Coordinator Group') }}</a>
                                                </li>
                                            @endrole
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item {{ $elementName == 'its_logbook' ? 'active' : '' }}">
                                    <a href="{{ route('its.log.indexAdmin') }}"
                                        class="nav-link">{{ __('Log Book & Report') }}</a>
                                </li>
                            @endrole
                            @if (App::environment('DEV', 'STG'))
                                @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_ILEAGUE', 'ADMIN', 'GRP_ITS_INT_SUPERVISOR',
                                    'GRP_ITS_SUPERVISOR', 'GRP_ITS_KERANI'])
                                    <li class="nav-item {{ $parentSection == 'assess-man' ? 'active' : '' }}">
                                        <a class="nav-link" href="#navbar-assess-man" data-toggle="collapse" role="button"
                                            aria-expanded="{{ $parentSection == 'assess-man' ? 'true' : '' }}"
                                            aria-controls="navbar-assess-man">
                                            <span class="nav-link-text">{{ __('Assessment Management') }}</span>
                                        </a>
                                        <div class="collapse {{ $parentSection == 'assess-man' ? 'show' : '' }}"
                                            id="navbar-assess-man">
                                            <ul class="nav nav-sm flex-column">
                                                @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_ILEAGUE', 'ADMIN', 'GRP_ITS_KERANI'])
                                                    <li
                                                        class="nav-item {{ $elementName == 'its_form_template' ? 'active' : '' }}">
                                                        <a href="{{ route('its.formTemplate.index') }}"
                                                            class="nav-link">{{ __('Form Template') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'its_question_bank' ? 'active' : '' }}">
                                                        <a href="{{ route('its.questionBank.index') }}"
                                                            class="nav-link">{{ __('Question Bank') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'its_assess_form' ? 'active' : '' }}">
                                                        <a href="{{ route('its.assesmentform.index') }}"
                                                            class="nav-link">{{ __('Assessment Form') }}</a>
                                                    </li>
                                                @endrole
                                                @role(['GRP_ITS_SUPERVISOR', 'ADMIN'])
                                                    <li class="nav-item {{ $elementName == 'its_assess_ext' ? 'active' : '' }}">
                                                        <a href="{{ route('its.assesmentform.indexExt') }}"
                                                            class="nav-link">{{ __('Assessment Form External SV') }}</a>
                                                    </li>
                                                @endrole
                                                @role(['GRP_ITS_INT_SUPERVISOR', 'ADMIN'])
                                                    <li class="nav-item {{ $elementName == 'its_assess_int' ? 'active' : '' }}">
                                                        <a href="{{ route('its.assesmentform.indexInt') }}"
                                                            class="nav-link">{{ __('Assessment Form Internal SV') }}</a>
                                                    </li>
                                                @endrole
                                            </ul>
                                        </div>
                                    </li>
                                @endrole
                            @endif
                            @if (App::environment('DEV', 'STG'))
                                @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_ILEAGUE', 'ADMIN', 'GRP_ITS_INT_SUPERVISOR',
                                    'GRP_ITS_SUPERVISOR', 'GRP_ITS_KERANI'])
                                    <li class="nav-item {{ $parentSection == 'survey-man' ? 'active' : '' }}">
                                        <a class="nav-link" href="#navbar-survey-man" data-toggle="collapse" role="button"
                                            aria-expanded="{{ $parentSection == 'survey-man' ? 'true' : '' }}"
                                            aria-controls="navbar-survey-man">
                                            <span class="nav-link-text">{{ __('Survey Management') }}</span>
                                        </a>
                                        <div class="collapse {{ $parentSection == 'survey-man' ? 'show' : '' }}"
                                            id="navbar-survey-man">
                                            <ul class="nav nav-sm flex-column">
                                                @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_ILEAGUE', 'ADMIN', 'GRP_ITS_KERANI'])
                                                    <li
                                                        class="nav-item {{ $elementName == 'its_survey_template' ? 'active' : '' }}">
                                                        <a href="{{ route('its.surveyTemplate.index') }}"
                                                            class="nav-link">{{ __('Survey Template') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'its_survey_question_bank' ? 'active' : '' }}">
                                                        <a href="{{ route('its.surveyQuestionBank.index') }}"
                                                            class="nav-link">{{ __('Survey Question Bank') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'its_survey_form' ? 'active' : '' }}">
                                                        <a href="{{ route('its.surveyForm.index') }}"
                                                            class="nav-link">{{ __('Survey Form') }}</a>
                                                    </li>
                                                @endrole
                                                @role(['GRP_ITS_INT_SUPERVISOR', 'ADMIN'])
                                                    <li class="nav-item {{ $elementName == 'its_survey_int' ? 'active' : '' }}">
                                                        <a href="{{ route('its.surveyform.indexInt') }}"
                                                            class="nav-link">{{ __('Survey
                                                                                                        ') }}</a>
                                                    </li>
                                                @endrole
                                            </ul>
                                        </div>
                                    </li>
                                @endrole
                            @endif
                            @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'ADMIN', 'GRP_ITS_UTMCC'])
                                <li class="nav-item {{ $parentSection == 'its-setting' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-its-setting" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'its-setting' ? 'true' : '' }}"
                                        aria-controls="navbar-its-setting">
                                        <span class="nav-link-text">{{ __('Settings') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'its-setting' ? 'show' : '' }}"
                                        id="navbar-its-setting">
                                        <ul class="nav nav-sm flex-column">
                                            @role(['GRP_ITS_PENYELARAS', 'GRP_ITS_KERANI', 'GRP_ITS_ILEAGUE', 'ADMIN',
                                                'GRP_ITS_UTMCC'])
                                                <li class="nav-item {{ $elementName == 'Template_Its' ? 'active' : '' }}">
                                                    <a href="{{ route('its.template', ['NONE', 'NONE']) }}"
                                                        class="nav-link">{{ __('Template') }}</a>
                                                </li>
                                                <li class="nav-item {{ $elementName == 'announcement_its' ? 'active' : '' }}">
                                                    <a href="{{ route('its.announcement') }}"
                                                        class="nav-link">{{ __('Announcement & Document') }}</a>
                                                </li>
                                            @endrole
                                        </ul>
                                    </div>
                                </li>
                            @endrole
                        </ul>
                    </div>
                </li>
            @endrole
        @endif

        {{-- @endif --}}
        {{-- @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD', 'ADMIN'])
                            @else --}}
        @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_FAKULTI', 'GRP_PEG_FAKULTI', 'GRP_KER_BEN', 'GRP_PEN_BEN',
            'GRP_PEG_BEN', 'GRP_KER_XPTJ_INS', 'GRP_PEG_XPTJ_INS', 'GRP_KER_PTJ_INS', 'GRP_PEG_PTJ_INS', 'GRP_PEG_SPS_DAS'])
            <!-- Nav items : Begin Financial Menu-->
            {{--  START COMMENT FOR MIGRATION MYAIMS FINANCIAL ON 27/01/2023 : 3.00 PM   --}}
            @if (App::environment('local', 'DEV', 'STG', 'PROD'))
                <li class="nav-item {{ $parentSectionMain == 'financial' ? 'active' : '' }}">
                    <a class="nav-link" href="#navbar-financial" data-toggle="collapse" role="button"
                        aria-expanded="{{ $parentSectionMain == 'financial' ? 'true' : '' }}"
                        aria-controls="navbar-financial">
                        <i class="ni ni-briefcase-24 text-primary"></i>
                        <span class="nav-link-text">{{ __('Financial') }}</span>
                    </a>
                    <div class="collapse {{ $parentSectionMain == 'financial' ? 'show' : '' }}" id="navbar-financial">
                        <ul class="nav nav-sm flex-column">
                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_PEG_SKP_BSC', 'GRP_PEN_SKP_BSC', 'GRP_KER_SKP_BSC',
                                'GRP_KER_XPTJ_INS', 'GRP_PEG_XPTJ_INS', 'GRP_KER_PTJ_INS', 'GRP_PEG_PTJ_INS',
                                'GRP_PEG_SPS_DAS'])
                                <!-- Nav items : Begin Financial : Basic Info Menu -->
                                <li class="nav-item {{ $parentSection == 'basic-info' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-basic-info" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'basic-info' ? 'true' : '' }}"
                                        aria-controls="navbar-basic-info">
                                        <span class="nav-link-text">{{ __('Basic Info') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'basic-info' ? 'show' : '' }}"
                                        id="navbar-basic-info">
                                        <ul class="nav nav-sm flex-column">
                                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_PEG_SKP_BSC', 'GRP_PEN_SKP_BSC',
                                                'GRP_KER_SKP_BSC', 'GRP_KER_XPTJ_INS', 'GRP_PEG_XPTJ_INS', 'GRP_KER_PTJ_INS',
                                                'GRP_PEG_PTJ_INS'])
                                                <li
                                                    class="nav-item {{ $elementName == 'student-individual-debt' ? 'active' : '' }}">
                                                    <a href="{{ route('finance_code.basic_info.student_individual_debt') }}"
                                                        class="nav-link">{{ __('Student Account Info') }}</a>
                                                </li>
                                                {{--                                            <li class="nav-item {{ $elementName == 'student-individual-debt' ? 'active' : '' }}"> --}}
                                                {{--                                                <a href="{{ route('finance_code.basic_info2.student_individual_debt') }}" --}}
                                                {{--                                                   class="nav-link">{{ __('Student Account Info 2') }}</a> --}}
                                                {{--                                            </li> --}}
                                            @endrole
                                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_PEG_SKP_BSC', 'GRP_PEN_SKP_BSC',
                                                'GRP_KER_SKP_BSC', 'GRP_PEG_SPS_DAS'])
                                                <li class="nav-item {{ $elementName == 'student_sponsorship' ? 'active' : '' }}">
                                                    <a href="{{ route('finance_code.sponsor.student_sponsor') }}"
                                                        class="nav-link">{{ __('Student Sponsorship') }}</a>
                                                </li>
                                            @endrole
                                        </ul>
                                    </div>
                                </li>
                            @endrole
                            <!-- Nav items : End Financial : Basic Info Menu-->
                            <!-- Nav items : Begin Financial : Student Charge Menu -->
                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_PEG_SKP_DCJ', 'GRP_PEN_SKP_DCJ', 'GRP_KER_SKP_DCJ'])
                                <li class="nav-item {{ $parentSection == 'student-charge' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-student-charge" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'student-charge' ? 'true' : '' }}"
                                        aria-controls="navbar-student-charge">
                                        <span class="nav-link-text">{{ __('Student Charge') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'student-charge' ? 'show' : '' }}"
                                        id="navbar-student-charge">
                                        <ul class="nav nav-sm flex-column">
                                            <li
                                                class="nav-item {{ $elementName == 'undergraduate-individual-charges' ? 'active' : '' }}">
                                                <a href="{{ route('finance.student_charge.undergraduate.individual') }}"
                                                    class="nav-link">{{ __('Undergraduate Individual Charges') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'undergraduate-batch-charges' ? 'active' : '' }}">
                                                <a href="{{ route('finance.student_charge.undergraduate.batch') }}"
                                                    class="nav-link">{{ __('Undergraduate Batch Charges') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'postgraduate-individual-charges' ? 'active' : '' }}">
                                                <a href="{{ route('finance.student_charge.postgraduate.individual') }}"
                                                    class="nav-link">{{ __('Postgraduate Individual Charges') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'postgraduate-batch-charges' ? 'active' : '' }}">
                                                <a href="{{ route('finance.student_charge.postgraduate.batch') }}"
                                                    class="nav-link">{{ __('Postgraduate Batch Charges') }}</a>
                                            </li>

                                            <li class="nav-item {{ $elementName == 'accrual' ? 'active' : '' }}">
                                                <a href="{{ route('finance.student_charge.accrual') }}"
                                                    class="nav-link">{{ __('Accrual') }}</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            @endrole
                            <!-- Nav items : End Financial : Student Charge Menu-->

                            <!-- Nav items : Begin Financial : Charge Adjustment Menu-->
                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_PEG_SKP_ADJ', 'GRP_PEN_SKP_ADJ', 'GRP_KER_SKP_ADJ'])
                                <li class="nav-item {{ $elementName == 'charge-adjustment' ? 'active' : '' }}">
                                    <a href="{{ route('finance.chargeAdjustment.list') }}"
                                        class="nav-link">{{ __('Charge Adjustment') }}</a>
                                </li>
                            @endrole

                            <!-- Nav items : End Financial : Charge Adjustment Menu -->

                            <!-- Nav items : Begin Financial : PTJ Instruction Menu -->
                            <!--  'ADMIN','GRP_ADM_FIN','GRP_KER_SKP_INS','GRP_PEN_SKP_INS','GRP_PEG_SKP_INS'  -->
                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_XPTJ_INS', 'GRP_KER_SKP_INS', 'GRP_PEN_SKP_INS',
                                'GRP_PEG_SKP_INS', 'GRP_KER_PTJ_INS', 'GRP_PEG_PTJ_INS'])
                                <li class="nav-item {{ $parentSection == 'ptj-instruction' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-ptj-instruction" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'ptj-instruction' ? 'true' : '' }}"
                                        aria-controls="navbar-ptj-instruction">
                                        <span class="nav-link-text">{{ __('PTJ Instruction') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'ptj-instruction' ? 'show' : '' }}"
                                        id="navbar-ptj-instruction">
                                        <ul class="nav nav-sm flex-column">
                                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_INS', 'GRP_PEN_SKP_INS',
                                                'GRP_PEG_SKP_INS'])
                                                <li class="nav-item {{ $elementName == 'mapping' ? 'active' : '' }}">
                                                    <a href="{{ route('finance.ptj_instruction.mapping') }}"
                                                        class="nav-link">{{ __('Instruction Mapping') }}</a>
                                                </li>
                                            @endrole
                                            <!-- 'ADMIN','GRP_ADM_FIN','GRP_KER_SKP_INS','GRP_PEN_SKP_INS','GRP_PEG_SKP_INS'  -->
                                            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_XPTJ_INS', 'GRP_KER_SKP_INS',
                                                'GRP_PEN_SKP_INS', 'GRP_PEG_SKP_INS', 'GRP_KER_PTJ_INS', 'GRP_PEG_PTJ_INS'])
                                                <li class="nav-item {{ $elementName == 'application' ? 'active' : '' }}">
                                                    <a href="{{ route('finance.ptj_instruction.application') }}"
                                                        class="nav-link">{{ __('Instruction Application') }}</a>
                                                </li>
                                            @endrole
                                            <!--<li class="nav-item {{ $elementName == 'adjustment' ? 'active' : '' }}">
                                                        <a href=""
                                                           class="nav-link">{{ __('Charges Adjustment') }}</a> -->
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Billing Menu-->
                <!-- Nav items : Begin Financial : Receipting Process Menu Fasa 2 -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_RCP', 'GRP_PEN_SKP_RCP', 'GRP_PEG_SKP_RCP'])
                    <li class="nav-item {{ $parentSection == 'receipt' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-receipting-process" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'receipt' ? 'true' : '' }}"
                            aria-controls="navbar-receipting-process">
                            <span class="nav-link-text">{{ __('Receipting Process') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'receipt' ? 'show' : '' }}"
                            id="navbar-receipting-process">
                            <ul class="nav nav-sm flex-column">
                                <!--  <li class="nav-item {{ $elementName == 'counter-receipt' ? 'active' : '' }}">
                                                        <a href="{{ route('finance.receipt.counter_receipt.index') }}"
                                                           class="nav-link">{{ __('Counter Receipt') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'counter-closing' ? 'active' : '' }}">
                                                        <a href="{{ route('finance.receipt.counter_closing.index') }}"
                                                           class="nav-link">{{ __('Counter Closing') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'counter-official-receipt' ? 'active' : '' }}">
                                                        <a href="{{ route('finance.receipt.counter_official_receipt.index') }}"
                                                           class="nav-link">{{ __('Counter Official Receipt') }}</a>
                                                    </li> -->
                                <li class="nav-item {{ $elementName == 'scholarship-official-receipt' ? 'active' : '' }}">
                                    <a href="{{ route('finance.receipt.scholarship_official_receipt.index') }}"
                                        class="nav-link">{{ __('Scholarship Official Receipt') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'bill-official-receipt' ? 'active' : '' }}">
                                    <a href="{{ route('finance.receipt.bill_official_receipt.index') }}"
                                        class="nav-link">{{ __('Bill Official Receipt') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'green-card' ? 'active' : '' }}">
                                    <a href="{{ route('finance.receipt.green_card.index') }}"
                                        class="nav-link">{{ __('Official Receipt Balance') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Receipting Process Menu-->
                <!-- Nav items : Begin Financial : Prospect Online Payment Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_PRO', 'GRP_PEN_SKP_PRO', 'GRP_PEG_SKP_PRO'])
                    <li class="nav-item {{ $parentSection == 'prospect-online-payment' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-prospect-online-payment" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'prospect-online-payment' ? 'true' : '' }}"
                            aria-controls="navbar-prospect-online-payment">
                            <span class="nav-link-text">{{ __('Prospect Online Payment') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'prospect-online-payment' ? 'show' : '' }}"
                            id="navbar-prospect-online-payment">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'prospect-payment-fpx' ? 'active' : '' }}">
                                    <a href="{{ route('finance.prospect.fpx.index') }}"
                                        class="nav-link">{{ __('FPX Payment') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'prospect-payment-cc' ? 'active' : '' }}">
                                    <a href="{{ route('finance.prospect.cc.index') }}"
                                        class="nav-link">{{ __('Credit Card Payment') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'prospect-payment-flywire' ? 'active' : '' }}">
                                    <a href="{{ route('finance.prospect.flywire.index') }}"
                                        class="nav-link">{{ __('Flywire Payment') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'prospect-payment-telegraphic' ? 'active' : '' }}">
                                    <a href="{{ route('finance.prospect.telegraphic.index') }}"
                                        class="nav-link">{{ __('Telegraphic Transfer') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'prospect-payment-subledger' ? 'active' : '' }}">
                                    <a href="{{ route('finance.prospectSubledger.index') }}"
                                        class="nav-link">{{ __('Prospect Subledger') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'prospect-payment-reconcile' ? 'active' : '' }}">
                                    <a href="{{ route('finance.prospectReconcile.reconcile') }}"
                                        class="nav-link">{{ __('Prospect Reconcile') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Prospect Online Payment Menu-->
                <!-- Nav items : Begin Financial : Batch Processing Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_BAT', 'GRP_PEN_SKP_BAT', 'GRP_PEG_SKP_BAT'])
                    <li class="nav-item {{ $parentSection == 'batch-processing' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-batch-processing" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'batch-processing' ? 'true' : '' }}"
                            aria-controls="navbar-batch-processing">
                            <span class="nav-link-text">{{ __('Batch Processing') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'batch-processing' ? 'show' : '' }}"
                            id="navbar-batch-processing">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'online-dummy-batch' ? 'active' : '' }}">
                                    <a href="{{ route('finance.batch.dummy.index') }}"
                                        class="nav-link">{{ __('Online Payment Dummy') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'online-real-batch' ? 'active' : '' }}">
                                    <a href="{{ route('finance.batch.real.index') }}"
                                        class="nav-link">{{ __('Online Payment Real') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'receipt-dummy-batch' ? 'active' : '' }}">
                                    <a href="{{ route('finance.batch.sponsor.dummy.index') }}"
                                        class="nav-link">{{ __('Receipt Dummy') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'receipt-real-batch' ? 'active' : '' }}">
                                    <a href="{{ route('finance.batch.sponsor.real.index') }}"
                                        class="nav-link">{{ __('Receipt Real') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'monthly-allowance' ? 'active' : '' }}">
                                    <a href="#!" class="nav-link">{{ __('Monthly Allowance') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : PTJ Instruction Menu-->
                <!-- Nav items : Begin Financial : Billing Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_BTT', 'GRP_PEN_SKP_BTT', 'GRP_PEG_SKP_BTT'])
                    <li class="nav-item {{ $parentSection == 'billing' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-billing" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'billing' ? 'true' : '' }}"
                            aria-controls="navbar-billing">
                            <span class="nav-link-text">{{ __('Billing') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'billing' ? 'show' : '' }}" id="navbar-billing">
                            <ul class="nav nav-sm flex-column">
                                <!--<li class="nav-item {{ $elementName == 'student-scholarship-registration' ? 'active' : '' }}">
                            <a href="{{ route('finance.billing.scholarship') }}"
                                class="nav-link">{{ __('Student Scholarship Registration') }}</a>
                        </li> -->
                                <li class="nav-item {{ $elementName == 'bill-claims-genaration' ? 'active' : '' }}">
                                    <a href="{{ route('finance.billing.claim') }}"
                                        class="nav-link">{{ __('Bill') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'sponsor-reminder-letter' ? 'active' : '' }}">
                                    <a href="#!" class="nav-link">{{ __('Reminder') }}</a>
                                </li>
                                <!--
                        <li class="nav-item {{ $elementName == 'student-verification-letter' ? 'active' : '' }}">
                            <a href="#!" class="nav-link">{{ __('Student Verification Letter') }}</a>
                        </li>
                        -->
                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Billing Menu-->

                <!-- Nav items : Begin Financial : Billing V2 Menu -->
                @if (App::environment('local', 'DEV', 'STG'))
                    <li class="nav-item {{ $parentSection == 'billingv2' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-billingv2" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'billingv2' ? 'true' : '' }}"
                            aria-controls="navbar-bilingv2">
                            <span class="nav-link-text">{{ __('Billing V2') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'billingv2' ? 'show' : '' }}" id="navbar-billingv2">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'scholarship-billing-list' ? 'active' : '' }}">
                                    <a href="{{ route('finance.billing.list') }}"
                                        class="nav-link">{{ __('Individual Scholarship Billing') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'official-billing-list' ? 'active' : '' }}">
                                    <a href="{{ route('finance.official.billing.list') }}"
                                        class="nav-link">{{ __('Official Billing List') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'reminder' ? 'active' : '' }}">
                                    <a href="" class="nav-link">{{ __('Reminder') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                <!-- Nav items : End Financial : Billing V2 Menu-->

                <!-- Nav items : Begin Financial : Deposit Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_DEP', 'GRP_PEN_SKP_DEP', 'GRP_PEG_SKP_DEP'])
                    <li class="nav-item {{ $parentSection == 'deposit' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-deposit" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'deposit' ? 'true' : '' }}"
                            aria-controls="navbar-deposit">
                            <span class="nav-link-text">{{ __('Deposit') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'deposit' ? 'show' : '' }}" id="navbar-deposit">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'deposit-list' ? 'active' : '' }}">
                                    <a href="{{ route('finance.deposit.list') }}"
                                        class="nav-link">{{ __('Deposit List') }}</a>
                                </li>

                                <li class="nav-item {{ $elementName == 'deposit-refund' ? 'active' : '' }}">
                                    <a href="{{ route('finance.deposit.deposit_refund') }}"
                                        class="nav-link">{{ __('Deposit Refund') }}</a>
                                </li>
                                <!-- <li
                class="nav-item {{ $elementName == 'claim-deposit-list' ? 'active' : '' }}">
                <a href="#!" class="nav-link">{{ __('Claim Deposit List') }}</a>
                </li> -->
                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Deposit Menu-->
                <!-- Nav items : Begin Financial : Journal Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_JRL', 'GRP_PEN_SKP_JRL', 'GRP_PEG_SKP_JRL'])
                    <li class="nav-item {{ $parentSection == 'journal' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-journal" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'journal' ? 'true' : '' }}"
                            aria-controls="navbar-journal">
                            <span class="nav-link-text">{{ __('Journal') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'journal' ? 'show' : '' }}" id="navbar-journal">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'auto_journal' ? 'active' : '' }}">
                                    <a href="{{ route('finance.journal.auto_journal.index') }}"
                                        class="nav-link">{{ __('Auto Journal') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'manual_journal' ? 'active' : '' }}">
                                    <a href="{{ route('finance.journal.manual_journal.index') }}"
                                        class="nav-link">{{ __('Manual Journal') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Journal Menu-->
                <!-- Nav items : Begin Financial : Voucher Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_VCH', 'GRP_PEN_SKP_VCH', 'GRP_PEG_SKP_VCH'])
                    <li class="nav-item {{ $parentSection == 'voucher' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-voucher" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'voucher' ? 'true' : '' }}"
                            aria-controls="navbar-voucher">
                            <span class="nav-link-text">{{ __('Voucher') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'voucher' ? 'show' : '' }}" id="navbar-voucher">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'voucher-process' ? 'active' : '' }}">
                                    <a href="{{ route('finance.voucher.process') }}"
                                        class="nav-link">{{ __('Voucher Process') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'payment_record-cheque' ? 'active' : '' }}">
                                    <a href="{{ route('finance.voucher.payment.cheque') }}"
                                        class="nav-link">{{ __('Payment Record Cheque') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'payment_record-eft' ? 'active' : '' }}">
                                    <a href="{{ route('finance.voucher.payment.eft') }}"
                                        class="nav-link">{{ __('Payment Record EFT') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'eft-cheque-number' ? 'active' : '' }}">
                                    <a href="{{ route('finance.voucher.utility') }}"
                                        class="nav-link">{{ __('Utility Cheque Number') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Voucher Menu-->
                <!-- Nav items : Begin Financial : Bank Reconcilation Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN'])
                    <li class="nav-item {{ $parentSection == 'bank-reconcilation' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-bank-reconcilation" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'bank-reconcilation' ? 'true' : '' }}"
                            aria-controls="navbar-bank-reconcilation">
                            <span class="nav-link-text">{{ __('Bank Reconcilation') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'bank-reconcilation' ? 'show' : '' }}"
                            id="navbar-bank-reconcilation">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'auto-bank-reconciliation' ? 'active' : '' }}">
                                    <a href="#!" class="nav-link">{{ __('Auto Bank Reconciliation') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'manual-bank-reconciliation' ? 'active' : '' }}">
                                    <a href="#!" class="nav-link">{{ __('Manual Bank Reconciliation') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Bank Reconcilation Menu-->
                <!-- Nav items : Begin Financial : Supplementary Data Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_SPT', 'GRP_PEN_SKP_SPT', 'GRP_PEG_SKP_SPT'])
                    <li class="nav-item {{ $parentSection == 'supplementary-data' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-supplementary-data" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'supplementary-data' ? 'true' : '' }}"
                            aria-controls="navbar-supplementary-data">
                            <span class="nav-link-text">{{ __('Supplementary Data') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'supplementary-data' ? 'show' : '' }}"
                            id="navbar-supplementary-data">
                            <ul class="nav nav-sm flex-column">
                                <!-- <li class="nav-item {{ $elementName == 'ptptn-data' ? 'active' : '' }}">
                            <a href="#!" class="nav-link">{{ __('Ptptn Data') }}</a>
                        </li>
                        <li class="nav-item {{ $elementName == 'reedem-data-verification' ? 'active' : '' }}">
                            <a href="#!" class="nav-link">{{ __('Reedem Data Verification') }}</a>
                        </li>
                        <li class="nav-item {{ $elementName == 'charges-data-generation' ? 'active' : '' }}">
                            <a href="#!" class="nav-link">{{ __('Charges Data Generation') }}</a>
                        </li>
                        <li class="nav-item {{ $elementName == 'kl-student-bulk-account-opening' ? 'active' : '' }}">
                            <a href="#!" class="nav-link">{{ __('KL Student Bulk Account Opening') }}</a>
                        </li>-->
                                <li class="nav-item {{ $elementName == 'letter-generator' ? 'active' : '' }}">
                                    <a href="{{ route('finance.supplementarydata.letter') }}"
                                        class="nav-link">{{ __('Letter Generator') }}</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Supplementary Data Menu-->

                <!-- Nav items : Begin Financial : Data Archive Menu -->
                @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_KER_SKP_RPT', 'GRP_PEN_SKP_RPT', 'GRP_PEG_SKP_RPT'])
                    <li class="nav-item {{ $parentSection == 'data_archive' ? 'active' : '' }}">
                        <a class="nav-link" href="#data_archive" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSection == 'data_archive' ? 'true' : '' }}"
                            aria-controls="navbar-voucher">
                            <span class="nav-link-text">{{ __('Data Archive') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'data_archive' ? 'show' : '' }}" id="data_archive">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'student-charge' ? 'active' : '' }}">
                                    <a href="{{ route('finance.data_archive.student_charge.index') }}"
                                        class="nav-link">{{ __('Student Charge') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'student-payment' ? 'active' : '' }}">
                                    <a href="{{ route('finance.data_archive.student_payment.index') }}"
                                        class="nav-link">{{ __('Student Payment') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'student-ledger' ? 'active' : '' }}">
                                    <a href="{{ route('finance.data_archive.student_ledger.index') }}"
                                        class="nav-link">{{ __('Student Ledger') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'Lejar-am-resit' ? 'active' : '' }}">
                                    <a href="{{ route('finance.data_archive.lejar_am_resit.index') }}"
                                        class="nav-link">{{ __('Lejar Am Resit') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'Lejar-am-jernal' ? 'active' : '' }}">
                                    <a href="{{ route('finance.data_archive.lejar_am_jernal.index') }}"
                                        class="nav-link">{{ __('Lejar Am Jernal') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'Lejar-am-baucer' ? 'active' : '' }}">
                                    <a href="{{ route('finance.data_archive.lejar_am_baucer.index') }}"
                                        class="nav-link">{{ __('Lejar Am Baucer') }}</a>
                                </li>

                                <!-- Nav items : Begin Upload Temporary -->
                                <li class="nav-item {{ $elementName == 'tempupload' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('uploadtemp.index') }}">
                                        <span class="nav-link-text">{{ __('Upload Temporary') }}</span>
                                    </a>
                                </li>
                                <!-- Nav items : End Upload Temporary -->
                            </ul>
                        </div>
                    </li>
                @endrole
                <!-- Nav items : End Financial : Data Archive Menu-->



                </ul>
        </div>
        </li>
        @endif
        {{--  END COMMENT FOR MIGRATION MYAIMS FINANCIAL ON 27/01/2023 : 3.00 PM   --}}
        <!-- Nav items : End Financial Menu -->

    @endrole
    {{-- @endrole --}}

    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD', 'ADMIN'])
        <!-- Nav items : Begin Calendar Menu-->
        <li class="nav-item {{ $parentSection == 'calendar' ? 'active' : '' }}">
            <a class="nav-link" href="#navbar-calendar" data-toggle="collapse" role="button"
                aria-expanded="{{ $parentSection == 'calendar' ? 'true' : '' }}" aria-controls="navbar-calendar">
                <i class="ni ni-calendar-grid-58 text-primary"></i>
                <span class="nav-link-text">{{ __('Academic Calendar') }}</span>
            </a>
            <div class="collapse {{ $parentSection == 'calendar' ? 'show' : '' }}" id="navbar-calendar">
                <ul class="nav nav-sm flex-column">
                    <li
                        class="nav-item {{ Request::is('calendar/index') || Request::is('calendar/create') || Request::is('calendar/update') ? 'active' : '' }}">
                        <a href="{{ route('calendar.main.index') }}" class="nav-link ">@lang('calendar.main_activity_list')</a>
                    </li>
                </ul>
            </div>
            <div class="collapse {{ $parentSection == 'calendar' ? 'show' : '' }}" id="navbar-calendar">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ Request::is('calendar/schedule*') ? 'active' : '' }}">
                        <a href="{{ route('calendar.schedule.index') }}" class="nav-link ">@lang('calendar.work_schedule')</a>
                    </li>
                </ul>
            </div>
            <div class="collapse {{ $parentSection == 'calendar' ? 'show' : '' }}" id="navbar-calendar">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ Request::is('calendar/template*') ? 'active' : '' }}">
                        <a href="{{ route('calendar.template.index') }}" class="nav-link ">Calendar Template</a>
                    </li>
                </ul>
            </div>
            <div class="collapse {{ $parentSection == 'calendar' ? 'show' : '' }}" id="navbar-calendar">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ Request::is('calendar/draft*') ? 'active' : '' }}">
                        <a href="{{ route('calendar.draft.index') }}" class="nav-link ">Calendar Draft</a>
                    </li>
                </ul>
            </div>
            <div class="collapse {{ $parentSection == 'calendar' ? 'show' : '' }}" id="navbar-calendar">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ Request::is('calendar/description*') ? 'active' : '' }}">
                        <a href="{{ route('calendar.listing.index') }}" class="nav-link ">Academic Calendar List</a>
                    </li>
                </ul>
            </div>
            <div class="collapse {{ $parentSection == 'calendar' ? 'show' : '' }}" id="navbar-calendar">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ Request::is('calendar/view*') ? 'active' : '' }}">
                        <a href="{{ route('calendar.design.index') }}" class="nav-link ">Calendar View</a>
                    </li>
                </ul>
            </div>
            <div class="collapse {{ $parentSection == 'calendar' ? 'show' : '' }}" id="navbar-calendar">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ Request::is('calendar/week*') ? 'active' : '' }}">
                        <a href="{{ route('calendar.week.index') }}" class="nav-link ">Calendar Week</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Nav items : End Calendar Menu -->
    @endrole
    <!-- Nav items : Begin Student Income Menu -->
    @if (App::environment('DEV', 'STG', 'PROD'))
        @role(['GRP_ADM_JTNCHEP', 'ADMIN'])
            <li class="nav-item {{ $parentSectionMain == 'Income' ? 'active' : '' }}">
                <a class="nav-link" href="#navbar-income" data-toggle="collapse" role="button"
                    aria-expanded="{{ $parentSectionMain == 'Income' ? 'true' : '' }}" aria-controls="navbar-income">
                    <i class="ni ni-hat-3 text-primary"></i>
                    <span class=" nav-link-text">{{ __('Income Clasification') }}</span>
                </a>
                <div class="collapse {{ $parentSectionMain == 'Income' ? 'show' : '' }}" id="navbar-income">
                    <ul class="nav nav-sm flex-column">
                        <!-- Nav items : Begin Application List Sub Menu -->
                        <li class="nav-item {{ $elementName == 'application-list' ? 'active' : '' }}">
                            <a href="{{ route('income.listApply') }}"
                                class="nav-link">{{ __('Application List') }}</a>
                        </li>
                        <li class="nav-item {{ $elementName == 'application-report' ? 'active' : '' }}">
                            <a href="{{ route('income.report') }}" class="nav-link">{{ __('Reporting') }}</a>
                        </li>
                        {{-- <li class="nav-item {{ $elementName == 'application-statistic' ? 'active' : '' }}">
                    <a href="{{ route('income.statistic') }}" class="nav-link">{{ __('Statistic') }}</a>
                </li> --}}

                        <!-- Nav items : End Application List Sub Menu -->
                    </ul>
                </div>
            </li>
        @endrole
    @endif
    <!-- Nav items : End Student Income Menu -->
    <!-- Nav items : Begin Student Welfare Menu -->
    @if (App::environment('DEV'))
        @role(['GRP_ADM_JTNCHEP', 'ADMIN'])
            <li class="nav-item {{ $parentSectionMain == 'Welfare' ? 'active' : '' }}">
                <a class="nav-link" href="#navbar-welfare" data-toggle="collapse" role="button"
                    aria-expanded="{{ $parentSectionMain == 'Welfare' ? 'true' : '' }}" aria-controls="navbar-income">
                    <i class="ni ni-hat-3 text-primary"></i>
                    <span class=" nav-link-text">{{ __('Welfare') }}</span>
                </a>
                <div class="collapse {{ $parentSectionMain == 'Welfare' ? 'show' : '' }}" id="navbar-welfare">
                    <ul class="nav nav-sm flex-column">
                        <!-- Nav items : Begin Application List Sub Menu -->
                        <li class="nav-item {{ $elementName == 'sponsor-list' ? 'active' : '' }}">
                            <a href="{{ route('welfare.listSponsor') }}"
                                class="nav-link">{{ __('Sponsor List') }}</a>
                        </li>
                        <li class="nav-item {{ $elementName == 'welfare-list' ? 'active' : '' }}">
                            <a href="{{ route('welfare.listProgram') }}"
                                class="nav-link">{{ __('Program List') }}</a>
                        </li>
                        <li class="nav-item {{ $elementName == 'recipient-list' ? 'active' : '' }}">
                            <a href="{{ route('welfare.listRecipient') }}"
                                class="nav-link">{{ __('Recipient List') }}</a>
                        </li>
                        <!-- Nav items : End Application List Sub Menu -->
                    </ul>
                </div>
            </li>
        @endrole
    @endif
    <!-- Nav items : End Student Welfare Menu -->
    <!-- Nav items : Begin Report Menu-->
    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD', 'ADMIN',
        'GRP_UTMI', 'GRP_ADM_FIN', 'GRP_PEG_BEN', 'GRP_KER_SKP_RPT', 'GRP_PEN_SKP_RPT', 'GRP_PEG_SKP_RPT'])
        <li class="nav-item {{ $parentSection == 'report' ? 'active' : '' }}">
            <a class="nav-link" href="#navbar-report" data-toggle="collapse" role="button"
                aria-expanded="{{ $parentSection == 'report' ? 'true' : '' }}" aria-controls="navbar-report">
                <i class="ni ni-chart-pie-35 text-primary"></i>
                <span class="nav-link-text">{{ __('Report & Statistic') }}</span>
            </a>
            <div class="collapse {{ $parentSection == 'report' ? 'show' : '' }}" id="navbar-report">
                <ul class="nav nav-sm flex-column">
                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD',
                        'ADMIN', 'GRP_UTMI'])
                        <!-- Nav items : Begin Report & Statistic : Academic Menu -->
                        <li class="nav-item">
                            <a href="#navbar-report-Academic" class="nav-link" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="navbar-report-Academic">{{ __('Academic') }}</a>
                            <div class="collapse show" id="navbar-report-Academic" style="">
                                <ul class="nav nav-sm flex-column">
                                    @role(['ADMIN'])
                                        <li class="nav-item {{ $elementName == 'programme-all' ? 'active' : '' }}">
                                            <a href="{{ route('report.activeAll') }}"
                                                class="nav-link">{{ __('List of Programme') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'programme-active' ? 'active' : '' }}">
                                            <a href="{{ route('report.active') }}"
                                                class="nav-link">{{ __('List of Active Programme') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'vaccine-status' ? 'active' : '' }}">
                                            <a href="{{ route('report.vaccineStatus') }}"
                                                class="nav-link">{{ __('Student Vaccination Information') }}</a>
                                        </li>
                                    @endrole
                                    @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA',
                                        'GRP_ADM_ACD', 'ADMIN', 'GRP_UTMI'])
                                        <li class="nav-item {{ $elementName == 'student-course' ? 'active' : '' }}">
                                            <a href="{{ route('report.studentcourse') }}"
                                                class="nav-link">{{ __('List of Students by Course') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'course-register' ? 'active' : '' }}">
                                            <a href="{{ route('report.courseregister') }}"
                                                class="nav-link">{{ __('List of course registration with credit hours') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'course-capping' ? 'active' : '' }}">
                                            <a href="{{ route('report.courseCapping') }}"
                                                class="nav-link">{{ __('List of Course by Capping') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'student-enrollment' ? 'active' : '' }}">
                                            <a href="{{ route('report.studentEnroll') }}"
                                                class="nav-link">{{ __('List of Student Enrollment') }}</a>
                                        </li>
                                    @endrole
                                    @if (App::environment('local'))
                                        <li class="nav-item {{ $parentSection == 'report' ? 'status_here' : '' }}">
                                            <a href="#navbar-report-Academic" class="nav-link" data-toggle="collapse"
                                                role="button"
                                                aria-expanded="{{ $parentSection == 'report' ? 'true' : '' }}"
                                                aria-controls="navbar-report-Academic">
                                                <span class="nav-link-text">{{ __('List of Code') }}</span>
                                            </a>
                                            <div class="collapse {{ $parentSection == 'report' ? 'show' : '' }}"
                                                id="navbar-report-Academic" style="">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item {{ $elementName == 'loc-active' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locActive') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Active') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'loc-blood' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locBlood') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Blood') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'loc-campus' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locCampus') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Campus') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-certificate' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locCertificate') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Certificate') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-company' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locCompany') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Company') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-country' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locCountry') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Country') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'loc-course' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locCourse') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Course') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-ccsubject' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locCCsubject') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Cross Campus Similar Subject') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-faculty' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locFaculty') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Faculty') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-iccolor' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locICcolor') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('IC Color') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-maritial' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locMaritial') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Marital Status') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-prasyarat' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locPrasyarat') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Prerequisite Subject') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-process' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locProcessCode') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Process Duration / Code Maintenance') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'loc-races' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locRaces') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Races') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-religion' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locReligion') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Religion') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'loc-spm' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locSPM') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('SPM Subject') }}</a>
                                                    </li>
                                                    <li class="nav-item {{ $elementName == 'loc-state' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locState') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('State') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-subject' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locSubject') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Subject') }}</a>
                                                    </li>
                                                    <li
                                                        class="nav-item {{ $elementName == 'loc-roomtype' ? 'active' : '' }}">
                                                        <a href="{{ route('report.locRoomtype') }}"
                                                            class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Type of Room') }}</a>
                                                    </li>
                                                    {{-- <li
                                                class="nav-item {{ $elementName == 'semester-batch-pg' ? 'active' : '' }}">
                                                <a href="{{ route('semester.indexBatchPg',['none','none']) }}"
                                                    class="nav-link">&nbsp;&nbsp;&nbsp;{{ __('Rename') }}</a>
                                            </li> --}}
                                                </ul>
                                            </div>
                                        </li>
                                    @endif
                                    @if (App::environment('local', 'DEV', 'STG', 'PROD'))
                                        <li class="nav-item {{ $elementName == 'recordServe' ? 'active' : '' }}">
                                            <a href="{{ route('report.recordSurv') }}"
                                                class="nav-link">{{ __('Records Surveillance') }}</a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                        </li>
                        <!-- Nav items : End Report & Statistic : Academic Menu-->
                    @endrole
                    {{--             @role(['GRP_ADM_FIN', 'ADMIN', 'GRP_KER_BEN', 'GRP_PEG_BEN']) --}}
                    <!-- Nav items : Begin Report & Statistic : Financial Menu -->
                    @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_PEG_BEN', 'GRP_KER_SKP_RPT', 'GRP_PEN_SKP_RPT', 'GRP_PEG_SKP_RPT'])
                        {{--  start COMMENT FOR MIGRATION MYAIMS FINANCIAL ON 27/01/2023 : 3.00 PM   --}}
                        @if (App::environment('local', 'DEV', 'STG', 'PROD'))
                            <li class="nav-item {{ $parentSection == 'report-financial' ? 'active' : '' }}">
                                <a class="nav-link" href="#navbar-report-financial" data-toggle="collapse"
                                    role="button"
                                    aria-expanded="{{ $parentSection == 'report-financial' ? 'true' : '' }}"
                                    aria-controls="navbar-report-financial">
                                    <span class="nav-link-text">{{ __('Financial') }}</span>
                                </a>
                                <div class="collapse {{ $parentSection == 'report-financial' ? 'show' : '' }}"
                                    id="navbar-report-financial">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item {{ $elementName == 'reportfin-basic-info' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __('Financial Basic Info') }}</a>
                                        </li>
                                        <li
                                            class="nav-item {{ $elementName == 'reportfin-student-charge' ? 'active' : '' }}">
                                            <a href="{{ route('finance_report.student_charge') }}"
                                                class="nav-link">{{ __('Student Charge') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-batch' ? 'active' : '' }}">
                                            <a href="{{ route('finance_report.batch.processing') }}"
                                                class="nav-link">{{ __('Batch Processing') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-receipt' ? 'active' : '' }}">
                                            <a href="{{ route('finance_report.receipt') }}"
                                                class="nav-link">{{ __('Receipt') }}</a>
                                        </li>
                                        <li
                                            class="nav-item {{ $elementName == 'reportfin-PTJ-instruction' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __('PTJ Instruction') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-bill-claim' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __('Bill Claim') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-voucher' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __('Voucher') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-journal' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __('Journal') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-prospect' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __('Prospect Online Payment') }}</a>
                                        </li>
                                        <li
                                            class="nav-item {{ $elementName == 'reportfin-supportive-data' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __('Supportive Data') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-deposit' ? 'active' : '' }}">
                                            <a href="{{ route('finance_report.deposit') }}"
                                                class="nav-link">{{ __('Deposit') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-reconcile' ? 'active' : '' }}">
                                            <a href="#!" class="nav-link">{{ __(' Bank Reconcile') }}</a>
                                        </li>
                                        <li
                                            class="nav-item {{ $elementName == 'reportfin-ecomm-reconcile' ? 'active' : '' }}">
                                            <a href="{{ route('finance_report.ecomm_reconcile') }}"
                                                class="nav-link">{{ __('E-Commerce Reconcile') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'reportfin-ledger' ? 'active' : '' }}">
                                            <a href="{{ route('finance_report.ledger') }}"
                                                class="nav-link">{{ __('Ledger') }}</a>
                                        </li>
                                        {{--                                            <li class="nav-item {{ $elementName == 'reportfin-generalreport' ? 'active' : '' }}"> --}}
                                        {{--                                                <a href="{{ route('finance_report.generalreport') }}" --}}
                                        {{--                                                   class="nav-link">{{ __('General Report') }}</a> --}}
                                        {{--                                            </li> --}}
                                        <li
                                            class="nav-item {{ $elementName == 'reportfin-generalreport' ? 'active' : '' }}">
                                            <a href="{{ route('finance_report.general_report2') }}"
                                                class="nav-link">{{ __('General Report') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                        {{--  END COMMENT FOR MIGRATION MYAIMS FINANCIAL ON 27/01/2023 : 3.00 PM   --}}
                    @endrole
                    <!-- Nav items : End Report & Statistic : Financial Menu-->
                    {{--                @endrole --}}
                </ul>
            </div>
        </li>
    @endrole
    <!-- Nav items : End Report & Statistic : Financial Menu-->
    </ul>
    </div>
    {{--    </li> --}}
    <!-- Nav items : End Report Menu -->
    {{--    </ul> --}}
    <!-- Divider -->
    {{-- <!-- @role(['GRP_ADM_FIN', 'GRP_ADM_ACD']) --> --}}
    @role(['GRP_ADM_FIN', 'GRP_ADM_ACD', 'GRP_KER_BEN', 'GRP_PEG_BEN', 'GRP_PEN_BEN', 'ADMIN', 'GRP_KER_AMD',
        'GRP_TP_PEG_AMD'])
        <hr class="3my-">
        <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">{{ __('Maintenance') }}</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <!-- Nav items : Begin Finance Code Menu-->

            <!-- Nav items : Begin Basic Code Menu-->
            @role(['GRP_ADM_FIN', 'GRP_ADM_ACD', 'ADMIN'])
                <li class="nav-item {{ $parentSectionMain == 'user-maintenance' ? 'active' : '' }}">
                    <a class="nav-link" href="#navbar-basic-code" data-toggle="collapse" role="button"
                        aria-expanded="{{ $parentSectionMain == 'user-maintenance' ? 'true' : '' }}"
                        aria-controls="navbar-basic-code">
                        <i class="ni ni-settings"></i>
                        <span class="nav-link-text">{{ __('User Maintenance') }}</span>
                    </a>
                    <div class="collapse {{ $parentSection == 'basic-code' ? 'show' : '' }}" id="navbar-basic-code">
                        <ul class="nav nav-sm flex-column">
                            <!-- Nav items : Begin Basic Code - ACL Menu -->
                            <li class="nav-item">
                                <a href="#navbar-basic-code-acl" class="nav-link" data-toggle="collapse" role="button"
                                    aria-expanded="true" aria-controls="navbar-basic-code-acl">{{ __('ACL') }}</a>
                                <div class="collapse show" id="navbar-basic-code-acl" style="">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('acl.permissions.index') }}"
                                                class="nav-link ">{{ __('Permission') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('acl.roles.index') }}"
                                                class="nav-link ">{{ __('Role') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('acl.users.index') }}"
                                                class="nav-link ">{{ __('User') }}</a>
                                        </li>
                                        <li class="nav-item {{ $elementName == 'acl-utmid' ? 'active' : '' }}">
                                            <a href="{{ route('acl.utmid') }}" class="nav-link ">{{ __('UTMID') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Nav items : End Basic Code - ACL Menu -->
                            {{-- <!-- <li class="nav-item">
                                            <a href="#navbar-basic-code-multilevel" class="nav-link" data-toggle="collapse"
                                                role="button" aria-expanded="true"
                                                aria-controls="navbar-basic-code-multilevel">{{ __('Multi') }} level</a>
                            <div class="collapse show" id="navbar-basic-code-multilevel" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link ">{{ __('Thirdlevelmenu') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link ">{{ __('Justanotherlink') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link ">{{ __('Onelastlink') }}</a>
                                    </li>
                                </ul>
                            </div>
                            </li> --> --}}
                        </ul>
                    </div>
                </li>
            @endrole
            <!-- Nav items : End Basic Code Menu -->

            @role(['GRP_TP_PEG_FAK', 'GRP_KER_FAKULTI', 'GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_TNCA', 'GRP_ADM_ACD',
                'ADMIN'])
                <!-- Nav items : Begin Code Menu-->
                <li class="nav-item {{ $parentSection == 'processing-code' ? 'active' : '' }}">
                    <a class="nav-link" href="#navbar-processing-code" data-toggle="collapse" role="button"
                        aria-expanded="{{ $parentSection == 'processing-code' ? 'true' : '' }}"
                        aria-controls="navbar-processing-code">
                        <i class="ni ni-app"></i>
                        <span class="nav-link-text">{{ __('Academic Code') }}</span>
                    </a>
                    <div class="collapse {{ $parentSection == 'processing-code' ? 'show' : '' }}"
                        id="navbar-processing-code">
                        <ul class="nav nav-sm flex-column">
                            <!-- Nav items : Begin  Code - ACL Menu -->
                            <li class="nav-item {{ $elementName == 'active-code' ? 'active' : '' }}">
                                <a href="{{ route('processingcode.activeCode') }}"
                                    class="nav-link ">{{ __('Active Code') }}</a>
                            </li>
                            <li class="nav-item {{ $elementName == 'processing-code-ug' ? 'active' : '' }}">
                                <a href="{{ route('processingcode.indexUG') }}"
                                    class="nav-link ">{{ __('Processing Code') }}</a>
                            </li>
                            <li class="nav-item {{ $elementName == 'processing-code-approval' ? 'active' : '' }}">
                                <a href="{{ route('approvalList.index') }}"
                                    class="nav-link ">{{ __('Approval List') }}</a>
                            </li>
                            <li class="nav-item {{ $elementName == 'processing-code-role' ? 'active' : '' }}">
                                <a href="{{ route('roleList.index') }}" class="nav-link ">{{ __('Role List') }}</a>
                            </li>
                            <li class="nav-item {{ $elementName == 'qrid-generator' ? 'active' : '' }}">
                                <a href="{{ route('qr.index') }}" class="nav-link ">{{ __('QRID Generator') }}</a>
                            </li>
                            <li class="nav-item {{ $elementName == 'qrdigital-id' ? 'active' : '' }}">
                                <a href="{{ route('qrDigitalID.index') }}"
                                    class="nav-link ">{{ __('MYQR - Student Digital ID') }}</a>
                            </li>
                            @role(['GRP_TP_PEG_AMD', 'GRP_KER_AMD', 'GRP_ADM_ACD', 'ADMIN'])
                                <li class="nav-item {{ $elementName == 'extSupervision' ? 'active' : '' }}">
                                    <a href="{{ route('external_supervision.index') }}"
                                        class="nav-link ">{{ __('External Supervison') }}</a>
                                </li>
                            @endrole
                            {{-- <!-- <li class="nav-item {{ $elementName == 'processing-code-pg' ? 'active' : '' }}">
                    <a href="{{ route('processingcode.indexPG')}}" class="nav-link ">{{ __('Processing Code PG') }}</a>
                </li> --> --}}
                        </ul>
                    </div>
                </li>
                <!-- Nav items : End Code Menu -->
            @endrole
            @role(['GRP_KER_SKP_DAS', 'GRP_PEN_SKP_DAS', 'GRP_PEG_SKP_DAS'])
                @if (App::environment('local', 'DEV', 'STG', 'PROD'))
                    {{--  START COMMENT FOR MIGRATION MYAIMS FINANCIAL ON 27/01/2023 : 3.00 PM   --}}
                    <li class="nav-item {{ $parentSectionMain == 'finance-code' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-finance-code" data-toggle="collapse" role="button"
                            aria-expanded="{{ $parentSectionMain == 'finance-code' ? 'true' : '' }}"
                            aria-controls="navbar-finance-code">
                            <i class="ni ni-briefcase-24"></i>
                            <span class="nav-link-text">{{ __('Finance Code') }}</span>
                        </a>
                        <div class="collapse {{ $parentSectionMain == 'finance-code' ? 'show' : '' }}"
                            id="navbar-finance-code">
                            <ul class="nav nav-sm flex-column">
                                <!-- Nav items : Begin Financial : Charge Code Menu -->
                                <li class="nav-item {{ $parentSection == 'charge-code' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-charge-code" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'charge-code' ? 'true' : '' }}"
                                        aria-controls="navbar-charge-code">
                                        <span class="nav-link-text">{{ __('Charge Code') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'charge-code' ? 'show' : '' }}"
                                        id="navbar-charge-code">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item {{ $elementName == 'fee-charge-codes' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge_code.fee_charge_code') }}"
                                                    class="nav-link">{{ __('Fee Charge Codes') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'fee-charge-codes-maps' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge_code.fee_charge_code_map') }}"
                                                    class="nav-link">{{ __('Fee Charge Codes Maps') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'charge-code-priority-setting' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge_code.priority_setting') }}"
                                                    class="nav-link">{{ __('Priority Setting') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'charge-code-summary-setting' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge_code.summary_setting') }}"
                                                    class="nav-link">{{ __('Grouping Setting') }}</a>
                                            </li>
                                            {{--                                        <li class="nav-item {{ $elementName == 'charge-code-credit_hour_rate' ? 'active' : '' }}"> --}}
                                            {{--                                            <a href="{{ route('finance_code.charge_code.credit_hour_rate') }}" --}}
                                            {{--                                               class="nav-link">{{ __('Credit Hour Rate') }}</a> --}}
                                            {{--                                        </li> --}}

                                            <ul class="nav nav-sm flex-column">
                                                <!-- Nav items : Begin Finance Code : MapsType Menu -->
                                                <li class="nav-item {{ $parentSection == 'maps_type' ? 'active' : '' }}">
                                                    <a class="nav-link" href="#navbar-charge-code" data-toggle="collapse"
                                                        role="button"
                                                        aria-expanded="{{ $parentSection == 'maps_type' ? 'true' : '' }}"
                                                        aria-controls="navbar-charge-code">
                                                        <span class="nav-link-text">{{ __('Maps Type') }}</span>
                                                    </a>
                                                    <div class="collapse {{ $parentSection == 'maps_type' ? 'show' : '' }}"
                                                        id="navbar-charge-code">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li
                                                                class="nav-item {{ $elementName == 'odl' ? 'active' : '' }}">
                                                                <a href="{{ route('finance_code.charge_code.maps_type.odl') }}"
                                                                    class="nav-link">{{ __('ODL ') }}</a>
                                                            </li>
                                                            <li
                                                                class="nav-item {{ $elementName == 'viva' ? 'active' : '' }}">
                                                                <a href="{{ route('finance_code.charge_code.maps_type.viva') }}"
                                                                    class="nav-link">{{ __('VIVA') }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- Nav items : End Finance Code : Maps Type Menu-->
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Charge Code Menu-->
                                <!-- Nav items : Begin Financial : Account Menu -->
                                <li class="nav-item {{ $parentSection == 'account' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-account" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'account' ? 'true' : '' }}"
                                        aria-controls="navbar-account">
                                        <span class="nav-link-text">{{ __('Account') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'account' ? 'show' : '' }}"
                                        id="navbar-account">
                                        <ul class="nav nav-sm flex-column">
                                            <li
                                                class="nav-item {{ $elementName == 'undergraduate-student-account' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.account.undergraduate.student_account') }}"
                                                    class="nav-link">{{ __('Undergraduate Student Account') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'postgraduate-student-account' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.account.postgraduate.student_account') }}"
                                                    class="nav-link">{{ __('Postgraduate Student Account') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'undergraduate-prospect' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.account.undergraduate.prospect') }}"
                                                    class="nav-link">{{ __('Undergraduate Prospect') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'postgraduate-prospect' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.account.postgraduate.prospect') }}"
                                                    class="nav-link">{{ __('Postgraduate Prospect') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'consumer' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.account.consumer') }}"
                                                    class="nav-link">{{ __('Consumer') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Account Menu-->
                                <!-- Nav items : Begin Financial : Hostel Menu -->
                                <li class="nav-item {{ $parentSection == 'hostel' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('finance_code.hostel') }}" role="button"
                                        aria-expanded="{{ $parentSection == 'hostel' ? 'true' : '' }}"
                                        aria-controls="navbar-hostel">
                                        <span class="nav-link-text">{{ __('Hostel') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'hostel' ? 'show' : '' }}"
                                        id="navbar-debtor-hostel">
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Hostel Menu-->
                                <!-- Nav items : Begin Financial : Bank Code Menu -->
                                <li class="nav-item {{ $parentSection == 'bank' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-bank" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'bank' ? 'true' : '' }}"
                                        aria-controls="navbar-bank">
                                        <span class="nav-link-text">{{ __('Bank') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'bank' ? 'show' : '' }}" id="navbar-bank">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item {{ $elementName == 'bank-code' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.bank_code') }}"
                                                    class="nav-link">{{ __('Bank Code') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'bank-code-map' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.bank_code.map') }}"
                                                    class="nav-link">{{ __('Bank Code Mapping') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Bank Code Menu-->
                                <!-- Nav items : Begin Financial : Sponsor Menu -->
                                <li class="nav-item {{ $parentSection == 'sponsor' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-sponsor" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'sponsor' ? 'true' : '' }}"
                                        aria-controls="navbar-sponsor">
                                        <span class="nav-link-text">{{ __('Sponsor') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'sponsor' ? 'show' : '' }}"
                                        id="navbar-sponsor">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item {{ $elementName == 'sponsor-info' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.sponsor') }}"
                                                    class="nav-link">{{ __('Sponsor Info') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'sponsor-coverage' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.sponsor.coverage.index') }}"
                                                    class="nav-link">{{ __('Sponsor Coverage') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'student_sponsorship' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.sponsor.student_sponsor') }}"
                                                    class="nav-link">{{ __('Student Sponsorship') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Sponsor Menu-->
                                <!-- Nav items : Begin Financial : Charge Menu -->
                                <li class="nav-item {{ $parentSection == 'charge' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-charge" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'charge' ? 'true' : '' }}"
                                        aria-controls="navbar-charge">
                                        <span class="nav-link-text">{{ __('Charge') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'charge' ? 'show' : '' }}"
                                        id="navbar-charge">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item {{ $elementName == 'fee-templates' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge.fee_templates') }}"
                                                    class="nav-link">{{ __('Fee Templates') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'undergraduate-fees-schedules' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge.fees_schedules.undergraduate') }}"
                                                    class="nav-link">{{ __('Undergraduate Fees Schedules') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'postgraduate-fees-schedules' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge.fees_schedules.postgraduate') }}"
                                                    class="nav-link">{{ __('Postgraduate Fees Schedules') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'program-maps' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge.program_maps') }}"
                                                    class="nav-link">{{ __('Program Maps') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'personal-bond' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge.personal_bond') }}"
                                                    class="nav-link">{{ __('Personal Bond') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'charge-code-credit_hour_rate' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.charge_code.credit_hour_rate') }}"
                                                    class="nav-link">{{ __('Credit Hour Rate') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'Offshore_Fee' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.offshoreFee') }}"
                                                    class="nav-link">{{ __('Offshore & Additional Semester Fee') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Charge Menu-->
                                <!-- Nav items : Begin Financial : Cohead Menu -->
                                <li class="nav-item {{ $parentSection == 'cohead' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-cohead" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'cohead' ? 'true' : '' }}"
                                        aria-controls="navbar-cohead">
                                        <span class="nav-link-text">{{ __('Cohead') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'cohead' ? 'show' : '' }}"
                                        id="navbar-cohead">
                                        <ul class="nav nav-sm flex-column">
                                            <li
                                                class="nav-item {{ $elementName == 'undergraduate-cohead' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.cohead.undergraduate') }}"
                                                    class="nav-link">{{ __('Undergraduate Cohead ') }}</a>
                                            </li>
                                            <li
                                                class="nav-item {{ $elementName == 'postgraduate-cohead' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.cohead.postgraduate') }}"
                                                    class="nav-link">{{ __('Postgraduate Cohead') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'student-cohead' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.cohead.student.settings') }}"
                                                    class="nav-link">{{ __('Student Cohead Settings') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Cohead Menu-->
                                <!-- Nav items : Begin Financial : Currency Conversion Menu -->
                                <li class="nav-item {{ $parentSection == 'currency-conversion' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('finance_code.currency') }}" role="button"
                                        aria-expanded="{{ $parentSection == 'currency-conversion' ? 'true' : '' }}"
                                        aria-controls="navbar-currency-conversion">
                                        <span class="nav-link-text">{{ __('Currency Conversion') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'currency-conversion' ? 'show' : '' }}"
                                        id="navbar-currency-conversion">

                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Currency Conversion Menu-->
                                <!-- Nav items : Begin Financial : Debtor Instruction Menu -->
                                <li class="nav-item {{ $parentSection == 'debtor-instruction' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('finance_code.debtor') }}" role="button"
                                        aria-expanded="{{ $parentSection == 'debtor-instruction' ? 'true' : '' }}"
                                        aria-controls="navbar-debtor-instruction">
                                        <span class="nav-link-text">{{ __('Debt Barred/Release') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'debtor-instruction' ? 'show' : '' }}"
                                        id="navbar-debtor-instruction">
                                    </div>
                                </li>
                                <li class="nav-item {{ $parentSection == 'debtor-barred' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('finance_code.debtBarred') }}" role="button"
                                        aria-expanded="{{ $parentSection == 'debtor-barred' ? 'true' : '' }}"
                                        aria-controls="navbar-debtor-barred">
                                        <span class="nav-link-text">{{ __('Debt Barred Week Setting') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'debtor-barred' ? 'show' : '' }}"
                                        id="navbar-debtor-barred">
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Debtor Instruction Menu-->
                                <!-- Nav items : Begin Financial : Integration Menu -->
                                <li class="nav-item {{ $parentSection == 'integration' ? 'active' : '' }}">
                                    <a class="nav-link" href="#navbar-integration" data-toggle="collapse" role="button"
                                        aria-expanded="{{ $parentSection == 'integration' ? 'true' : '' }}"
                                        aria-controls="navbar-integration">
                                        <span class="nav-link-text">{{ __('Integration and Migration') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'integration' ? 'show' : '' }}"
                                        id="navbar-integration">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item {{ $elementName == 'cost-center' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.integration.cost_center') }}"
                                                    class="nav-link">{{ __('Cost Center') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'sodo-codes' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.integration') }}"
                                                    class="nav-link">{{ __('Sodo Codes') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'cost-center-maps' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.integration.cost_center.maps') }}"
                                                    class="nav-link">{{ __('Cost Center Maps') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'ledger' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.integration.ledger') }}"
                                                    class="nav-link">{{ __('Ledger Info') }}</a>
                                            </li>
                                            <li class="nav-item {{ $elementName == 'vote' ? 'active' : '' }}">
                                                <a href="{{ route('finance_code.integration.vote') }}"
                                                    class="nav-link">{{ __('Migration Vote') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav items : Begin Financial : Reset Serial Menu -->
                                <li class="nav-item {{ $parentSection == 'reset_serial_no' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('finance_code.reset_serial_no') }}"
                                        role="button"
                                        aria-expanded="{{ $parentSection == 'reset_serial_no' ? 'true' : '' }}"
                                        aria-controls="navbar-hostel">
                                        <span class="nav-link-text">{{ __('Reset Serial No') }}</span>
                                    </a>
                                    <div class="collapse {{ $parentSection == 'reset_serial_no' ? 'show' : '' }}"
                                        id="navbar-debtor-hostel">
                                    </div>
                                </li>
                                <!-- Nav items : End Financial : Reset Serial Menu-->
                            </ul>
                        </div>
                    </li>
                    {{--  END COMMENT FOR MIGRATION MYAIMS FINANCIAL ON 27/01/2023 : 3.00 PM   --}}
                    <!-- Nav items : End Finance Code Menu -->
                @endif
            @endrole

            @role(['ADMIN', 'GRP_ADM_FIN', 'GRP_ADM_ACD'])
                <!-- Nav items : Begin Monitoring Menu-->
                <li class="nav-item {{ $parentSection == 'monitoring' ? 'active' : '' }}">
                    <a class="nav-link" href="#navbar-monitoring" data-toggle="collapse" role="button"
                        aria-expanded="{{ $parentSection == 'monitoring' ? 'true' : '' }}"
                        aria-controls="navbar-monitoring">
                        <i class="ni ni-tv-2"></i>
                        <span class="nav-link-text">{{ __('Monitoring') }}</span>
                    </a>
                    <div class="collapse {{ $parentSection == 'monitoring' ? 'show' : '' }}" id="navbar-monitoring">
                        <ul class="nav nav-sm flex-column">
                            <!-- Nav items : Begin Monitoring : Activities Logs Menu -->
                            <li class="nav-item {{ $parentSection == 'activities-logs' ? 'active' : '' }}">
                                <a class="nav-link" href="#navbar-activities-logs" data-toggle="collapse" role="button"
                                    aria-expanded="{{ $parentSection == 'activities-logs' ? 'true' : '' }}"
                                    aria-controls="navbar-activities-logs">
                                    <span class="nav-link-text">{{ __('Activities Logs') }}</span>
                                </a>

                            </li>
                            <!-- Nav items : End Monitoring : Activities Logs Menu -->
                            <!-- Nav items : End Monitoring Menu-->
                        </ul>
                    </div>
                </li>
                <!-- Nav items : End Monitoring Menu-->
            @endrole
            {{--    </div> --}}
        </ul>
        </div>
        {{--    </li> --}}
        </ul>
    @endrole
    </div>
    {{--    </li> --}}

</nav>
