<!-- sidebar -->
<div class="sidebar">
    <div class="sidebar_inner" data-simplebar>

        <ul class="side-colored">
            <li class="active">
                <a href="{{ route('explores') }}">
                    <i
                        class="fas fa-user-circle bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500"></i>
                    <span> Mijn profiel</span>
                </a>
            </li>

            <li><a href="{{ route('courses') }}">
                    <i
                        class="fas fa-play-circle bg-gradient-to-br from-yellow-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500"></i>
                    <span> Courses</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categories') }}">
                    <i
                        class="fas fa-th-list bg-gradient-to-br from-green-300 p-1 rounded-md side-icon text-opacity-80 text-white to-green-500"></i>
                    <span> Resultaten </span>
                </a>
            </li>

            <li><a href="{{ route('episodes') }}">
                    <i
                        class="fas fa-film bg-gradient-to-br from-pink-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500"></i>
                    <span> Uitleg / video’s </span>
                </a>
            </li>
            <li><a href="{{ route('books') }}">
                    <i
                        class="fas fa-book bg-gradient-to-br from-yellow-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500"></i>
                    <span> FAQ’s </span>
                </a>
            </li>
            <!-- <li><a href="{{ route('articles') }}">
                            <ion-icon name="newspaper"
                                class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> Articles</span>
                        </a>
                    </li> -->
        </ul>

        <ul class="side_links" data-sub-title="Admin">
            <li>
                <a href="{{ route('admin.posts') }}" style="display: flex; align-items: center;">
                    <i class="fas fa-clipboard bg-gradient-to-br from-green-300 p-1 rounded-md side-icon text-opacity-80 text-white to-green-500"
                        style="line-height: 30px; display: flex; justify-content: center; align-items: center;"></i>
                    <span>Posts</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.email-templates') }}" style="display: flex; align-items: center;">
                    <i class="fas fa-envelope bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500"
                        style="line-height: 30px; display: flex; justify-content: center; align-items: center;"></i>
                    <span>Email Template</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.user-lessons') }}" style="display: flex; align-items: center;">
                    <i class="fas fa-info-circle bg-gradient-to-br from-yellow-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500"
                        style="line-height: 30px; display: flex; justify-content: center; align-items: center;"></i>
                    <span>User Lesson</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.user-lesson-passes') }}" style="display: flex; align-items: center;">
                    <i class="fas fa-comment-alt bg-gradient-to-br from-pink-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500"
                        style="line-height: 30px; display: flex; justify-content: center; align-items: center;"></i>
                    <span>User Lesson Pass <span class="soon">new</span></span>
                </a>
            </li>
        </ul>


    </div>

    <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
</div>