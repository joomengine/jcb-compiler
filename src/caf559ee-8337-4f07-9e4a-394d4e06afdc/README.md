### JCB! Power
# final class Set (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Remote**
> extends: **ExtendingSet**

```uml
@startuml

class Set << (F,LightGreen) >> #RoyalBlue {
  # ?Parser $parser
  + __construct(Config $config, Grep $grep, ...)
  # mapItemValue_extends(object $item, array $power) : void
  # mapItemValue_extendsinterfaces(object $item, array $power) : void
  # mapItemValue_use_selection(object $item, array $power) : void
  # mapItemValue_load_selection(object $item, array $power) : void
  # mapItemValue_composer(object $item, array $power) : void
  # mapItemValue_implements(object $item, array $power) : void
  # updateItem(object $item, object $existing, ...) : bool
  # updatePower(object $item, object $existing, ...) : bool
  # createItem(object $item, object $repo) : bool
  # createPower(object $item, object $repo) : bool
  # updateItemReadme(object $item, object $existing, ...) : void
  # createItemReadme(object $item, object $repo) : void
  # targetRepo(object $item, object $repo) : bool
  # index_map_IndexName(object $item) : ?string
  # index_map_TypeName(object $item) : ?string
  # index_map_CodePath(object $item) : ?string
  # index_map_PowerPath(object $item) : ?string
  # index_map_NameSpace(object $item) : ?string
  # getNamespace(string $namespace, string $className) : ?string
  # getCleanNamespace(string $namespace) : string
}

note right of Set::__construct
  Constructor.

  since: 3.2.2
  
  arguments:
    Config $config
    Grep $grep
    Items $items
    ItemReadme $itemReadme
    MainReadme $mainReadme
    Git $git
    Tracker $tracker
    MessageBus $messages
    Parser $parser
    array $repos
    ?string $table = null
    ?string $settingsPath = null
    ?string $indexPath = null
end note

note left of Set::mapItemValue_extends
  Map a single item value (extends)

  since: 5.0.2
  return: void
end note

note right of Set::mapItemValue_extendsinterfaces
  Map a single item value (extendsinterfaces)

  since: 5.0.2
  return: void
end note

note left of Set::mapItemValue_use_selection
  Map a single item value (use_selection)

  since: 5.0.2
  return: void
end note

note right of Set::mapItemValue_load_selection
  Map a single item value (load_selection)

  since: 5.0.2
  return: void
end note

note left of Set::mapItemValue_composer
  Map a single item value (composer)

  since: 5.0.2
  return: void
end note

note right of Set::mapItemValue_implements
  Map a single item value (implements)

  since: 5.0.2
  return: void
end note

note left of Set::updateItem
  update an existing item (if changed)

  since: 5.0.3
  return: bool
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note right of Set::updatePower
  update an existing power code (if changed)

  since: 5.0.3
  return: bool
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note left of Set::createItem
  create a new item

  since: 5.0.3
  return: bool
end note

note right of Set::createPower
  create a new power

  since: 5.0.3
  return: bool
end note

note left of Set::updateItemReadme
  update an existing item readme

  since: 5.0.3
  return: void
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note right of Set::createItemReadme
  create a new item readme

  since: 5.0.3
  return: void
end note

note left of Set::targetRepo
  check that we have a target repo of this item

  since: 5.0.3
  return: bool
end note

note right of Set::index_map_IndexName
  Get the item name for the index values

  since: 5.0.3
  return: ?string
end note

note left of Set::index_map_TypeName
  Get the item type for the index values

  since: 5.0.3
  return: ?string
end note

note right of Set::index_map_CodePath
  Get the item code path for the index values

  since: 5.0.3
  return: ?string
end note

note left of Set::index_map_PowerPath
  Get the item power path for the index values

  since: 5.0.3
  return: ?string
end note

note right of Set::index_map_NameSpace
  Get the item namespace for the index values

  since: 5.0.3
  return: ?string
end note

note left of Set::getNamespace
  Set the namespace for this power

  since: 5.0.3
  return: ?string
end note

note right of Set::getCleanNamespace
  Get Clean Namespace without use or ; as part of the name space

  since: 5.0.3
  return: string
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
Super---caf559ee_8337_4f07_9e4a_394d4e06afdc---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")