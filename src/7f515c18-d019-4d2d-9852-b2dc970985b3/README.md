### JCB! Power
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

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---7f515c18_d019_4d2d_9852_b2dc970985b3---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")