### JCB! Power
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

  since: 5.1.1
  return: ?array
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
Super---44d039b9_d293_481b_b560_23a6e7a63962---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")