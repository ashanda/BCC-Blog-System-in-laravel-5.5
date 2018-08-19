 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Search</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Type Here . . .." class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <button class="sidebar-search-btn-full disabled" type="submit" value="Login">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Latest News</h3>
                                    <div class="sidebar-latest-research-area">
                                        <ul>

@foreach($news->posts()->orderBy('created_at', 'desc')->take(8)->get() as $post)

                                            <li>
                                                <div class="latest-research-img">
                                                    <a href="{{ route('post.single', ['slug' => $post->slug ]) }}"><img src="{{ $post->featured }}" class="img-responsive" alt="skilled"></a>
                                                </div>
                                                <div class="latest-research-content">
                                                    <h4>{{ $post->created_at->toFormattedDateString() }}</h4>
                                                    <a href="{{ route('post.single', ['slug' => $post->slug ]) }}"><p>{{ $post->title }}</p></a>
                                                </div>
                                            </li>
                            @endforeach

                                           
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>