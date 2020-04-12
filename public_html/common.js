// $(function(){
//     $('#js-btn li').click(function(){
//         const type = $(this).data('type-btn');
//         console.log(type);
//         if(type !== 'all'){
//             $('[data-type-item]').hide();
//             $('[data-type-item="' + type + '"]').fadeIn(300);
//             $('[data-type-item]').each(function(){
//                 const moge = $(this).data('type-item');
//                 console.log(moge);
//                 $('[data-type-item="' + type + '"]').fadeIn(300);
//             });
//         }else{
//             $('[data-type-item]').fadeIn(300);
//         }
//     });
//     $('#js-list .list__items').click(function(){
//         const id = $(this).find('use').attr('xlink:href');
//         const symbol = $('symbol' + id).prop('outerHTML');
//         if(!$(this).is('.is-active')){
//             $(this).addClass('is-active');
//             $('#target').append(symbol);
//         }else{
//             $(this).removeClass('is-active');
//             $('#target ' + id).remove();
//         }
//     });
// });

$(function(){
    $('#js-btn li').click(function(){
        const type = $(this).data('type-btn');
        console.log(type);
        if(type !== 'all'){
            $('[data-type-item]').hide();
            $('[data-type-item="' + type + '"]').fadeIn(300);
            $('[data-type-item]').each(function(){
                const moge = $(this).data('type-item');
                console.log(moge);
                $('[data-type-item="' + type + '"]').fadeIn(300);
            });
        }else{
            $('[data-type-item]').fadeIn(300);
        }
    });
    $('#js-list .list__items').click(function(){
        const id = $(this).find('use').attr('xlink:href');
        const symbol = $('symbol' + id).prop('outerHTML');
        const symbolReplace = symbol.replace(/</g,'&lt;');
        if(!$(this).is('.is-active')){
            $(this).addClass('is-active');
            $('#target').append(symbolReplace);
        }else{
            $(this).removeClass('is-active');
            $('#target ' + id).remove();

            //$('#target').replace(/symbolReplace/g,'');
            const moge = $('#target').text();
            let pupe = moge.replace(/</g,'&lt;');
            let popi = pupe.replace(symbolReplace,'');
            // console.log(symbolReplace);
            $('#target').text(popi);
            console.log(popi);


            // //$('#target').replace(/symbolReplace/g,'');
            // const moge = $('#target').text();
            // // const hoge = moge.replace(/symbolReplace/g,'moge');
            // //const hoge = moge.replace(/&lt;/g,'<');
            // const fuga =symbolReplace.replace(/&lt;/,'<');
            // const hoge = moge.replace(/fuga/g,'');
            // //const fuga = hoge.replace(/symbolReplace/g,'');
            // $('#target').text(hoge);
            // console.log(hoge);
        }
    });
});
