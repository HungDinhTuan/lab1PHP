@extends('admin.Layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                All products of the list.
            </div>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">', $message, '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Size</th>
                        <th>Producer</th>
                        <th>Created At</th>
                        <th>Created By</th>
                        <th>Updated At</th>
                        <th>Updated By</th>
                        <th>Comment</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($allProducts as $key => $catePro)
                        <tr>
                            <td>{{ $catePro->product_name}}</td>
                            <td>{{ $catePro->price}}</td>
                            <td>{{ $catePro->amount}}</td>
                            <td>{{ $catePro->size}}</td>
                            <td>{{ $catePro->producer}}</td>
                            <td>{{ $catePro->created_by}}</td>
                            <td>{{ $catePro->created_at}}</td>
                            <td>{{ $catePro->updated_by}}</td>
                            <td>{{ $catePro->updated_at}}</td>
                            <td>{{ $catePro->comment}}</td>
                            <td>
                                <a href="{{ url('/update-category-product/'.$catePro->product_id) }}" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>
                                <a onclick="return confirm('Are you sure to delete ?')" href="{{ url('/delete-category-product/'.$catePro->product_id) }} " ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            @if ($allProducts->onFirstPage())
                                <li class="disabled"><span>&laquo;</span></li>
                            @else
                                <li><a href="{{ $allProducts->url(1) }}" rel="prev">&laquo;</a></li>
                            @endif

                            @if ($allProducts->lastPage() > 2)
                            @php
                                $currentPage = $allProducts->currentPage();
                                $lastPage = $allProducts->lastPage();
                                $range = 2;
                            @endphp

                            @for ($i = max(1, $currentPage - $range); $i <= min($currentPage + $range, $lastPage); $i++)
                                <li class="{{ $allProducts->currentPage() == $i ? 'active' : '' }}">
                                    <a href="{{ $allProducts->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            @if ($currentPage + $range < $lastPage)
                                <li class="disabled"><span>...</span></li>
                                <li><a href="{{ $allProducts->url($lastPage) }}">{{ $lastPage }}</a></li>
                            @endif
                            @else
                                @foreach ($allProducts->getUrlRange(1, $allProducts->lastPage()) as $page => $url)
                                    <li class="{{ $allProducts->currentPage() == $page ? 'active' : '' }}">
                                        <a href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach
                            @endif

                            @if ($allProducts->hasMorePages())
                                <li><a href="{{ $allProducts->nextPageUrl() }}" rel="next">&rsaquo;</a></li>
                            @else
                                <li class="disabled"><span>&rsaquo;</span></li>
                            @endif

                            @if ($allProducts->hasMorePages())
                                <li><a href="{{ $allProducts->url($allProducts->lastPage()) }}" rel="next">&raquo;</a></li>
                            @else
                                <li class="disabled"><span>&raquo;</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

