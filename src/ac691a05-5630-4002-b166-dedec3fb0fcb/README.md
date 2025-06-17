### JCB! Power
# final class FieldXML (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml

class FieldXML << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Field $field
  # Groups $groups
  # Name $name
  # TypeName $typename
  # Attributes $attributes
  # ModalSelect $modalselect
  # Xml $xml
  # CustomFieldTypeFile $customfieldtypefile
  # Counter $counter
  # ComponentFields $componentfields
  + __construct(Config $config, Language $language, ...)
  + get(string $setType, array $fieldAttributes, ...) : \stdClass
  - buildOptionField(array $fieldAttributes, string $name, ...) : \stdClass
  - buildPlainField(array $fieldAttributes, string $name, ...) : \stdClass
  - buildSpacerField(array $fieldAttributes, string $name, ...) : \stdClass
  - buildSpecialField(array $fieldAttributes, string $name, ...) : \stdClass
  - buildCustomField(array $fieldAttributes, string $name, ...) : \stdClass
  - buildSubformField(array $fieldAttributes, string $name, ...) : \stdClass
  - getSubformField(string $setType, array $fieldAttributes, ...) : \stdClass
  - buildRepeatableField(array $fieldAttributes, string $name, ...) : \stdClass
  - normalizeFieldsSet(mixed $fields) : array
  - resolveFieldSetData(array $fields, string $nameSingleCode, ...) : array
  - buildSingleOption(\SimpleXMLElement $fieldXML, string $value, ...) : void
  - buildMultipleOptions(\SimpleXMLElement $fieldXML, string $value, ...) : void
  - buildGroupedOptionSet(\SimpleXMLElement $fieldXML, string $value, ...) : void
  - parseGroupLabel(string $option, string $langView, ...) : void
  - parseGroupedOption(string $option, string $langView, ...) : void
  - parsePlainGroupedOption(string $option, string $langView, ...) : void
  - appendGroupedOptions(\SimpleXMLElement $fieldXML, array $groups, ...) : void
  - appendFieldAttributes(\SimpleXMLElement $fieldXML, array $fieldAttributes, ...) : void
  - setLinkerRelations(array $link) : ?array
}

note right of FieldXML::__construct
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
    Xml $xml
    CustomFieldTypeFile $customfieldtypefile
    Counter $counter
    ComponentFields $componentfields
end note

note left of FieldXML::get
  Create a field with simpleXMLElement class

  since: 3.2.0
  return: \stdClass
  
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

note right of FieldXML::buildOptionField
  Build an option field with grouped or plain options.

  since: 5.1.1
  return: \stdClass
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    array|null $optionArray
end note

note left of FieldXML::buildPlainField
  Build a plain field (standard Joomla field without options).

  since: 5.1.1
  return: \stdClass
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
end note

note right of FieldXML::buildSpacerField
  Build a spacer field (non-database field used for display or layout).

  since: 5.1.1
  return: \stdClass
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
end note

note left of FieldXML::buildSpecialField
  Build a special field (repeatable or subform type).

  since: 5.1.1
  return: \stdClass
  
  arguments:
    array $fieldAttributes
    string $name
    array $subform
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
end note

note right of FieldXML::buildCustomField
  Build a custom field (JCB custom configuration or plugin/module field).

  since: 5.1.1
  return: \stdClass
  
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
end note

note left of FieldXML::buildSubformField
  Build a subform field (nested repeatable field container).

  since: 5.1.1
  return: \stdClass
  
  arguments:
    array $fieldAttributes
    string $name
    array $subform
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
end note

note right of FieldXML::getSubformField
  Create a field with simpleXMLElement class

  since: 5.1.1
  return: \stdClass
  
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
end note

note left of FieldXML::buildRepeatableField
  Build a repeatable field (deprecated Joomla repeatable format).

  since: 5.1.1
  return: \stdClass
  
  arguments:
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
end note

note right of FieldXML::normalizeFieldsSet
  Normalize the field definition string into an array.

  since: 5.1.1
  return: array
end note

note left of FieldXML::resolveFieldSetData
  Resolve the field data from a set of IDs using the internal field service.

  since: 5.1.1
  return: array
  
  arguments:
    array $fields
    string $nameSingleCode
    string $nameListCode
    string $_resolverKey
end note

note right of FieldXML::buildSingleOption
  Build a single option XML element.

  since: 5.1.1
  return: void
  
  arguments:
    \SimpleXMLElement $fieldXML
    string $value
    string $langView
    array|null $optionArray
end note

note left of FieldXML::buildMultipleOptions
  Build multiple option XML elements.

  since: 5.1.1
  return: void
  
  arguments:
    \SimpleXMLElement $fieldXML
    string $value
    string $langView
    array|null $optionArray
end note

note right of FieldXML::buildGroupedOptionSet
  Build grouped option set for groupedlist fields.

  since: 5.1.1
  return: void
  
  arguments:
    \SimpleXMLElement $fieldXML
    string $value
    string $langView
    string $typeName
    array|null $optionArray
end note

note left of FieldXML::parseGroupLabel
  Parse a group label from groupedlist syntax.

  since: 5.1.1
  return: void
  
  arguments:
    string $option
    string $langView
    array $groups
    array $order
end note

note right of FieldXML::parseGroupedOption
  Parse a grouped option with value|text|groupId syntax.

  since: 5.1.1
  return: void
  
  arguments:
    string $option
    string $langView
    array $grouped
    array $order
    array|null $optionArray
end note

note left of FieldXML::parsePlainGroupedOption
  Parse a plain grouped option where value equals text.

  since: 5.1.1
  return: void
  
  arguments:
    string $option
    string $langView
    array $grouped
    array $order
    array|null $optionArray
end note

note right of FieldXML::appendGroupedOptions
  Append parsed grouped and ungrouped options to field XML.

  since: 5.1.1
  return: void
  
  arguments:
    \SimpleXMLElement $fieldXML
    array $groups
    array $grouped
    array $order
end note

note left of FieldXML::appendFieldAttributes
  Append all attributes to field, excluding a specific one

  since: 5.1.1
  return: void
  
  arguments:
    \SimpleXMLElement $fieldXML
    array $fieldAttributes
    ?string $exclude = null
end note

note right of FieldXML::setLinkerRelations
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
Super---ac691a05_5630_4002_b166_dedec3fb0fcb---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")