# php-cli-editor-input
Small and simple intermediate layer between console editors (like vim) and your PHP console application

## Usage

```
use Technodelight\CliEditorInput\AdaptableFactoryWithPreference;

$editor = AdaptableFactoryWithPreference::build('vim');
$title = 'Title will be a commented out section as first line in the editor';
$content = 'Initial content, which can be edited';
$content = $editor->edit($title, $content, $stripComments = true);
// $content will contain all lines read back from the editor, excluding commented out lines
// each line starting with # is considered as comment (regex '/^#/')
```
