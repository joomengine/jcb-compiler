```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Attributes (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**

```uml
@startuml
class Attributes << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Registry $registry
  # ListFieldClass $listfieldclass
  # DoNotEscape $donotescape
  # Placeholder $placeholder
  # Customcode $customcode
  # Language $language
  # FieldGroups $fieldgroups
  - int $title
  - int $alias
  - object $settings
  - array $properties
  - array $php
  - array $attributes
  - bool $custom
  - string $customLabel
  - bool $readonly
  - int $viewType
  - string $name
  - string $typeName
  - bool $multiple
  - string $langLabel
  - string $langView
  - string $nameListCode
  - string $nameSingleCode
  - array $placeholders
  - bool $repeatable
  + __construct(Config $config, Registry $registry, ...)
  + set(array $field, int $viewType, ...) : array
  - setSettings(array $field) : bool
  - setProperties() : bool
  - setAttributes() : void
  - extraAttributes() : void
  - getValue(string $name) : ?string
  - modelValue(?string $value, string $name, ...) : ?string
  - setValue(?string $value, string $name, ...) : void
  - setPHP() : void
  - getXmlValue(string $name) : ?string
  - getType() : string
  - getName() : string
  - getValidation() : ?string
  - getTypePHP(string $name) : ?string
  - getPrimePHP(string $name) : ?string
  - getExtends() : ?string
  - getView() : ?string
  - getViews() : ?string
  - getComponent() : ?string
  - getTable() : ?string
  - getValueField() : ?string
  - getKeyField() : ?string
  - removeButtonRepeatable() : string
  - getButton() : ?string
  - removeRequired() : string
  - getSqlTitleKey() : ?string
  - setReadonly(string $name) : string
  - getMultiple(string $name) : string
  - getClass() : string
  - initialise(int $viewType, string $name, ...) : void
}

note right of Attributes::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Registry $registry
    ListFieldClass $listfieldclass
    DoNotEscape $donotescape
    Placeholder $placeholder
    Customcode $customcode
    Language $language
    FieldGroups $fieldgroups
end note

note left of Attributes::set
  set field attributes

  since: 3.2.0
  return: array
  
  arguments:
    array $field
    int $viewType
    string $name
    string $typeName
    bool $multiple
    string $langLabel
    string $langView
    string $nameListCode
    string $nameSingleCode
    array $placeholders
    bool $repeatable = false
end note

note right of Attributes::setSettings
  set field settings

  since: 3.2.0
  return: bool
end note

note left of Attributes::setProperties
  set field properties

  since: 3.2.0
  return: bool
end note

note right of Attributes::setAttributes
  Set the attributes with properties

  since: 3.2.0
  return: void
end note

note left of Attributes::extraAttributes
  Set the extra attributes

  since: 3.2.0
  return: void
end note

note right of Attributes::getValue
  Get XML value

  since: 3.2.0
  return: ?string
end note

note left of Attributes::modelValue
  Model the found value

  since: 3.2.0
  return: ?string
  
  arguments:
    ?string $value
    string $name
    int $translatable
end note

note right of Attributes::setValue
  set the found value

  since: 3.2.0
  return: void
  
  arguments:
    ?string $value
    string $name
    string $example
    int $mandatory
end note

note left of Attributes::setPHP
  Set PHP if needed

  since: 3.2.0
  return: void
end note

note right of Attributes::getXmlValue
  get an xml value (default)

  since: 3.2.0
  return: ?string
end note

note left of Attributes::getType
  get type value

  since: 3.2.0
  return: string
end note

note right of Attributes::getName
  get name value

  since: 3.2.0
  return: string
end note

note left of Attributes::getValidation
  get validation value

  since: 3.2.0
  return: ?string
end note

note right of Attributes::getTypePHP
  get type PHP code

  since: 3.2.0
  return: ?string
end note

note left of Attributes::getPrimePHP
  get prime PHP code

  since: 3.2.0
  return: ?string
end note

note right of Attributes::getExtends
  get extends value

  since: 3.2.0
  return: ?string
end note

note left of Attributes::getView
  get view value

  since: 3.2.0
  return: ?string
end note

note right of Attributes::getViews
  get views value

  since: 3.2.0
  return: ?string
end note

note left of Attributes::getComponent
  get component value

  since: 3.2.0
  return: ?string
end note

note right of Attributes::getTable
  get table value

  since: 3.2.0
  return: ?string
end note

note left of Attributes::getValueField
  get value field

  since: 3.2.0
  return: ?string
end note

note right of Attributes::getKeyField
  get key field value

  since: 3.2.0
  return: ?string
end note

note left of Attributes::removeButtonRepeatable
  remove the button on repeatable

  since: 3.2.0
  return: string
end note

note right of Attributes::getButton
  get button value

  since: 3.2.0
  return: ?string
end note

note left of Attributes::removeRequired
  remove the required value

  since: 3.2.0
  return: string
end note

note right of Attributes::getSqlTitleKey
  get sql title key value
and set the [data-key-name] if the key is not an [id]

  since: 5.1.1
  return: ?string
end note

note left of Attributes::setReadonly
  set the readonly switch

  since: 3.2.0
  return: string
end note

note right of Attributes::getMultiple
  set the multiple switch

  since: 3.2.0
  return: string
end note

note left of Attributes::getClass
  get class value

  since: 3.2.0
  return: string
end note

note right of Attributes::initialise
  Initialise the attributes and other global values

  since: 3.2.0
  return: void
  
  arguments:
    int $viewType
    string $name
    string $typeName
    bool $multiple
    string $langLabel
    string $langView
    string $nameListCode
    string $nameSingleCode
    array $placeholders
    bool $repeatable
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---7f515c18_d019_4d2d_9852_b2dc970985b3---Power
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

