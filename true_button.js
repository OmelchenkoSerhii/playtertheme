(function() {
	tinymce.PluginManager.add('true_mce_button', function( editor, url ) { // id кнопки true_mce_button должен быть везде один и тот же
		editor.addButton( 'true_mce_button', { // id кнопки true_mce_button
			icon: 'bloquote', // мой собственный CSS класс, благодаря которому я задам иконку кнопки
			title: 'Insert a shortcode', // всплывающая подсказка при наведении
            text: 'Extended quote',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Add quote parameters',
                            body: [
                                {
                                    type: 'textbox', // тип textbox = текстовое поле
                                    name: 'quoteAuthorName', // ID, будет использоваться ниже
                                    label: 'Author', // лейбл
                                    value: 'Chris Noble' // значение по умолчанию
                                },
                                {
                                    type: 'textbox', // тип textbox = текстовое поле
                                    name: 'quoteAuthorMeta',
                                    label: 'Author short info',
                                    value: 'SaaSLeads Academy Graduate',
                                },
                                {
                                    type: 'textbox', // тип listbox = выпадающий список select
                                    name: 'quoteContent',
                                    label: 'Content of the quote',
                                    value: '',
                                    multiline: true, // большое текстовое поле - textarea
                                    minWidth: 300, // минимальная ширина в пикселях
                                    minHeight: 100 // минимальная высота в пикселях
                                }
                            ],
                            onsubmit: function( e ) { // это будет происходить после заполнения полей и нажатии кнопки отправки
                                editor.insertContent( '[extendedQuote name="' + e.data.quoteAuthorName + '" meta="' + e.data.quoteAuthorMeta + '" content="' + e.data.quoteContent + '"]');
                            }
                        });
                    }
		});
	});
})();