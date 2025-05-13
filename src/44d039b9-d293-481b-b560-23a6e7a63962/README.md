```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldString (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml
class FieldString << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Field $field
  # Groups $groups
  # Name $name
  # TypeName $typename
  # Attributes $attributes
  # ModalSelect $modalselect
  # CustomFieldTypeFile $customfieldtypefile
  # Counter $counter
  # ComponentFields $componentfields
  + __construct(Config $config, Language $language, ...)
  + get(string $setType, array $fieldAttributes, ...) : string
  - buildOptionField(array $fieldAttributes, string $name, ...) : string
  - buildPlainField(array $fieldAttributes, string $name, ...) : string
  - buildSpacerField(array $fieldAttributes, string $name, ...) : string
  - buildSpecialField(array $fieldAttributes, string $name, ...) : string
  - buildCustomField(array $fieldAttributes, string $name, ...) : string
  - buildSubformField(array $fieldAttributes, string $name, ...) : string
  - getSubformField(string $setType, array $fieldAttributes, ...) : string
  - buildRepeatableField(array $fieldAttributes, string $name, ...) : string
  - normalizeFieldsSet(mixed $fields) : array
  - resolveFieldSetData(array $fields, string $nameSingleCode, ...) : array
  - buildRepeatableSubField(array $fieldData, string $langView, ...) : string
  - buildOptionSet(string $value, string $typeName, ...) : string
  - buildGroupedOptionSet(string $value, string $langView, ...) : string
  - buildFlatOptionSet(string $value, string $langView, ...) : string
  - addOptionToLanguage(string $option, string $langView, ...) : void
  - addOptionToGroupOrFlat(string $option, string $langView, ...) : void
  - setLinkerRelations(array $link) : ?array
}

note right of FieldString::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    Field $field
    Groups $groups
    Name $name
    TypeName $typename
    Attributes $attributes
    ModalSelect $modalselect
    CustomFieldTypeFile $customfieldtypefile
    Counter $counter
    ComponentFields $componentfields
end note

note left of FieldString::get
  Create a field using string manipulation

  since: 3.2.0
  return: string
  
  arguments:
    string $setType
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    array|null $optionArray
    ?array $custom = null
    string $taber = ''
end note

note right of FieldString::buildOptionField
  Build an option type field.

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    array|null $optionArray
    string $taber
end note

note left of FieldString::buildPlainField
  Build a plain field (non-option, non-grouped).

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
    string $taber
end note

note right of FieldString::buildSpacerField
  Build a spacer field (non-database placeholder).

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
end note

note left of FieldString::buildSpecialField
  Build a special field (e.g. repeatable, subform).

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldAttributes
    string $name
    array $subform
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $taber
end note

note right of FieldString::buildCustomField
  Build a custom field (defined from config or external source).

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    array|null $optionArray
    ?array $custom = null
    string $taber = ''
end note

note left of FieldString::buildSubformField
  Build a subform field (special case of repeatable without modal).

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldAttributes
    string $name
    array $subform
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $taber
end note

note right of FieldString::getSubformField
  Create a field using string manipulation

  since: 5.1.1
  return: string
  
  arguments:
    string $setType
    array $fieldAttributes
    string $name
    array $subform
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    array|null $optionArray
    ?array $custom = null
    string $taber = ''
end note

note left of FieldString::buildRepeatableField
  Build a repeatable field.

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $taber
end note

note right of FieldString::normalizeFieldsSet
  Normalize the field definition string into an array.

  since: 5.1.1
  return: array
end note

note left of FieldString::resolveFieldSetData
  Resolve the field data from a set of IDs using the internal field service.

  since: 5.1.1
  return: array
  
  arguments:
    array $fields
    string $nameSingleCode
    string $nameListCode
    string $_resolverKey
end note

note right of FieldString::buildRepeatableSubField
  Build a single subfield in repeatable context.

  since: 5.1.1
  return: string
  
  arguments:
    array $fieldData
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $_resolverKey
    string $taber
end note

note left of FieldString::buildOptionSet
  Build an option set from a raw option string.

  since: 5.1.1
  return: string
  
  arguments:
    string $value
    string $typeName
    string $langView
    array|null $optionArray
    string $taber
end note

note right of FieldString::buildGroupedOptionSet
  Build a grouped option set.

  since: 5.1.1
  return: string
  
  arguments:
    string $value
    string $langView
    array|null $optionArray
    string $taber
end note

note left of FieldString::buildFlatOptionSet
  Build a flat option set.

  since: 5.1.1
  return: string
  
  arguments:
    string $value
    string $langView
    array|null $optionArray
    string $taber
end note

note right of FieldString::addOptionToLanguage
  Add a plain option to the language array and option set.

  since: 5.1.1
  return: void
  
  arguments:
    string $option
    string $langView
    string $optionSet
    array|null $optionArray
    string $taber
end note

note left of FieldString::addOptionToGroupOrFlat
  Add an option to grouped or flat mode as fallback.

  since: 5.1.1
  return: void
  
  arguments:
    string $option
    string $langView
    string $optionSet
    array $grouped_
    array|null $optionArray
    string $taber
end note

note right of FieldString::setLinkerRelations
  Sets the linker relations for a field based on the provided link data.
The method determines the type of link relation based on the presence of a table.
If no table is provided, it assigns a type 2 with a null table, otherwise it assigns type 1.
It also extracts additional values from the input array, such as component, entity, value, and key.

  since: 5.2.1
  return: ?array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---44d039b9_d293_481b_b560_23a6e7a63962---Power
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

