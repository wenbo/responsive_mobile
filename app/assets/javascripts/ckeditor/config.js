CKEDITOR.editorConfig = function( config ) {
  // 環境問わず常に日本語
  config.language = 'en';
  //     // 高さ
  config.height = 200;
  //         // サイズ変更を禁止
  config.resize_enabled = false;
  //             // toolbar 下に表示
  config.toolbarLocation = 'bottom';
  //                 // toolbar ボタンを指定
  config.toolbar = [ [ 'Bold', 'Italic', 'Underline' ], [ 'TextColor', 'FontSize' ], ];
  //                               // 個人的な好みで白っぽく
  config.uiColor = '#f8f8f8';
};

