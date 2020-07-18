@if($form_tpl_item['type']=='custorm')
    {{--//完全自定义模板--}}
    @include('plugin.'.$form_tpl_item['custorm_blade'])
@else
    @if($form_tpl_item['type']!='hidden')
        <div class="layui-form-item {{ $form_tpl_item['itemClass']??'' }}">
            @include('plugin.tpl.form.label',['form_item'=>$form_tpl_item])
            <div class="layui-input-block">
                @switch($form_tpl_item['type'])
                    @case('text')
                    @case('type')
                    @case('email')
                    @case('number')
                    @case('date')
                    @case('datetime')
                    @include('plugin.tpl.form.text',['form_item'=>$form_tpl_item])
                    @break
                    @case('select')

                    @include('plugin.tpl.form.select',['form_item'=>$form_tpl_item])
                    @break
                    @case('textarea')
                    @case('editor')
                    @include('plugin.tpl.form.textarea',['form_item'=>$form_tpl_item])
                    @break
                    @case('radio')
                    @include('plugin.tpl.form.radio',['form_item'=>$form_tpl_item])
                    @break
                    @case('checkbox')
                    @include('plugin.tpl.form.checkbox',['form_item'=>$form_tpl_item])
                    @break
                    @break
                    @case('img')
                    @include('plugin.tpl.form.img',['form_item'=>$form_tpl_item])
                    @break
                    @case('imgMore')
                    @include('plugin.tpl.form.imgMore',['form_item'=>$form_tpl_item])
                    @break
                    @case('icon')
                    @include('plugin.tpl.form.icon',['form_item'=>$form_tpl_item])
                    @break
                    @case('color')
                    @include('plugin.tpl.form.color',['form_item'=>$form_tpl_item])
                    @break
                    @case('blade')
                    @include('plugin.'.$form_tpl_item['blade_name'],['form_item'=>$form_tpl_item])
                    @break
                    @case('map')
                    @include('plugin.tpl.form.map',['form_item'=>$form_tpl_item])
                    @break

                @endswitch
            </div>
        </div>
    @else
        @include('plugin.tpl.form.text',['form_item'=>$form_tpl_item])
    @endif
@endif
