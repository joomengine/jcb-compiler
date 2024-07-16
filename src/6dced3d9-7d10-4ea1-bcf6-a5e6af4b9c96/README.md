```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class CustomFieldTypeFile (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml
class CustomFieldTypeFile << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Content $content
  # Contents $contents
  # SiteField $sitefield
  # Placeholder $placeholder
  # Language $language
  # ComponentPlaceholder $componentplaceholder
  # Structure $structure
  # InputButton $inputbutton
  # FieldGroupControl $fieldgroupcontrol
  # ExtensionCustomFields $extensioncustomfields
  # Header $header
  # CoreField $corefield
  # array $fieldmap
  # CMSApplication $app
  # array $phpFieldArray
  # array $placeholders
  # array $data
  # string $nameListCode
  # string $nameSingleCode
  # string $contentsKey
  # string $type
  # string $baseType
  # string $rawType
  # bool $customTypeWasSet
  # string $extends
  + __construct(Config $config, Content $content, ...)
  + set(array $data, string $nameListCode, ...) : void
  - setTypeName(array $data) : void
  - isFieldBuildable(array $data) : bool
  - init(array $data, string $nameListCode, ...) : void
  - setContentPlaceholders() : void
  - determineJPrefix() : string
  - setLocalPlaceholders() : void
  - getComComponentName() : string
  - getViewName() : string
  - getViewsName() : string
  - getClassNameExtends() : string
  - updatePlaceholderValues() : void
  - loadGlobalPlaceholders() : void
  - handleOwnCustomField() : void
  - handleStandardCustomField() : void
  - isButtonOptionSet() : bool
  - setButtonOptionErrorMessages() : void
  - prepareCustomFieldHeader() : void
  - prepareCustomFieldBody() : void
  - loadPhpScript(string $scriptType, ?string $default = 'return null;') : ?string
  - generateGroupLanguageName() : string
  - trackExtensionCustomFields() : void
  - isUsedInPluginOrModule() : bool
}

note right of CustomFieldTypeFile::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Content $content
    Contents $contents
    SiteField $sitefield
    Placeholder $placeholder
    Language $language
    ComponentPlaceholder $componentplaceholder
    Structure $structure
    InputButton $inputbutton
    FieldGroupControl $fieldgroupcontrol
    ExtensionCustomFields $extensioncustomfields
    Header $header
    CoreField $corefield
    ?CMSApplication $app = null
end note

note left of CustomFieldTypeFile::set
  Set Custom Field Type File
This method handles the setting of a custom field type. It checks if the field has already been built,
handles namespace in the custom field type name, sets various placeholders, and loads the global placeholders.
Additionally, it manages the setting of dynamic contents based on the field type and other configurations.

  since: 3.2.0
  return: void
  
  arguments:
    array $data
    string $nameListCode
    string $nameSingleCode
end note

note right of CustomFieldTypeFile::setTypeName
  Set the type name of the custom field.
This function checks if there is a namespace in the field type name (indicated by a dot).
If a namespace exists, it extracts and removes the namespace from the type name.

  since: 3.2.0
  return: void
end note

note left of CustomFieldTypeFile::isFieldBuildable
  Checks if the field is eligible to be built.
This method examines the 'custom' attribute of the field data to determine if the field has
already been built or if it is marked as 'prime'. It returns true if the field should be built,
and false otherwise.

  since: 3.2.0
  return: bool
end note

note right of CustomFieldTypeFile::init
  The function to set the class values to the current field being build.

  since: 3.2.0
  return: void
  
  arguments:
    array $data
    string $nameListCode
    string $nameSingleCode
end note

note left of CustomFieldTypeFile::setContentPlaceholders
  The function to set the default content placeholder.

  since: 3.2.0
  return: void
end note

note right of CustomFieldTypeFile::determineJPrefix
  Determines the J prefix for the field type.
This method extracts the prefix from the field type name if it contains a dot, indicating namespace usage.
If no dot is present, it defaults to 'J'.

  since: 3.2.0
  return: string
end note

note left of CustomFieldTypeFile::setLocalPlaceholders
  Set placeholder options for the custom field.
This method maps various data points to their corresponding placeholders.
It takes custom field data, view codes, and a J prefix, and prepares an associative array
of placeholders and their values.

  since: 3.2.0
  return: void
end note

note right of CustomFieldTypeFile::getComComponentName
  Gets the component name for the custom field.
This method extracts the component name from the custom field data.
If the component name is explicitly set in the custom field data,
it returns that name after ensuring it's a safe string. Otherwise,
it defaults to a name constructed from the component code name in the configuration.

  since: 3.2.0
  return: string
end note

note left of CustomFieldTypeFile::getViewName
  Determines the view name for a custom field.
This method extracts the view name from the custom field data, with a fallback
to a provided single view code name if the view name is not explicitly set in the data.

  since: 3.2.0
  return: string
end note

note right of CustomFieldTypeFile::getViewsName
  Gets the formatted name for the views associated with the custom field.
This method checks if a specific views name is provided in the custom field data.
If it is, it formats and returns this name. If not, it defaults to the provided list view name.

  since: 3.2.0
  return: string
end note

note left of CustomFieldTypeFile::getClassNameExtends
  Gets the class name being extended.
This method is for the new namespace class name in Joomla 4 and above.

  since: 3.2.0
  return: string
end note

note right of CustomFieldTypeFile::updatePlaceholderValues
  Update placeholder values in the field data.
This function iterates over the given replacements and applies them to the placeholders.
It updates both the key and value of each placeholder, ensuring that they are correctly set.

  since: 3.2.0
  return: void
end note

note left of CustomFieldTypeFile::loadGlobalPlaceholders
  Load global placeholders into the placeholders array.
This method iterates over the global placeholders and adds them to the replace array.

  since: 3.2.0
  return: void
end note

note right of CustomFieldTypeFile::handleOwnCustomField
  Handle the setting of a own custom field.
This method manages the building of the custom field type file, the handling of PHP scripts,
and specific operations for certain field types like user fields.

  since: 3.2.0
  return: void
end note

note left of CustomFieldTypeFile::handleStandardCustomField
  Handle the setting of a standard custom field.
This method manages the building of the custom field type file, the handling of PHP scripts,
and specific operations for certain field types like user fields.

  since: 3.2.0
  return: void
end note

note right of CustomFieldTypeFile::isButtonOptionSet
  Checks if the button option is set for the custom field.
This function examines the custom field data to determine if the 'add_button' option
is set and configured to a truthy value. It's used to manage specific behaviors or
display messages related to the button option in custom fields.

  since: 3.2.0
  return: bool
end note

note left of CustomFieldTypeFile::setButtonOptionErrorMessages
  Enqueue error messages related to the dynamic button option in custom fields.
This method adds error messages to the queue when there's an attempt to use the dynamic button
option in custom field types where it's not supported. It's specifically used in the context of 'own custom'
field types.

  since: 3.2.0
  return: void
end note

note right of CustomFieldTypeFile::prepareCustomFieldHeader
  Prepare the header for a custom field file.
This method sets up the necessary imports and configurations for the header section of a custom field.
It handles the dynamic setting of comments and import statements based on the field's extension name.

  since: 3.2.0
  return: void
end note

note left of CustomFieldTypeFile::prepareCustomFieldBody
  Prepare the body for a custom field file.
This method sets up the necessary imports and configurations for the body section of a custom field.
It handles the dynamic setting of php code.

  since: 3.2.0
  return: void
end note

note right of CustomFieldTypeFile::loadPhpScript
  Load and process a PHP script for the custom field.

  since: 3.2.0
  return: ?string
end note

note left of CustomFieldTypeFile::generateGroupLanguageName
  Generate a group language name for the custom field.

  since: 3.2.0
  return: string
end note

note right of CustomFieldTypeFile::trackExtensionCustomFields
  Tracks extension custom fields for plugins or modules.
This method is used to track custom fields when they are utilized in plugins or modules.
If the field is used in a plugin or module, it records this information, potentially to facilitate
actions like copying the field over to other parts of the system.

  since: 3.2.0
  return: void
end note

note left of CustomFieldTypeFile::isUsedInPluginOrModule
  Determines if the field is used in a plugin or module.

  since: 3.2.0
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---6dced3d9_7d10_4ea1_bcf6_a5e6af4b9c96---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

