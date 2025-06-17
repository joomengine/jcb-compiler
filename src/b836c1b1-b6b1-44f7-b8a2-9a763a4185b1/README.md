### JCB! Power
# class Power (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**

```uml
@startuml

class Power  #Gold {
  + array $active
  + array $namespace
  + array $composer
  + array $superpowers
  # string $fixUrl
  # array $state
  # array $retry
  # Config $config
  # Placeholder $placeholder
  # Customcode $customcode
  # Gui $gui
  # Superpower $superpower
  # $db
  # $app
  + __construct(Config $config, Placeholder $placeholder, ...)
  + load(array $guids) : void
  + get(string $guid, int $build) : ?object
  - set(string $guid) : bool
  - isPowerSet(string $guid) : bool
  - isGuidValid(string $guid) : bool
  - getPowerData(string $guid) : ?object
  - setNamespace(string $guid) : bool
  - setUseSelection(string $guid, array $use, ...) : void
  - setLoadSelection(string $guid) : void
  - setComposer(string $guid) : void
  - setImplements(string $guid, array $use) : void
  - setExtend(string $guid, array $use, ...) : void
  - setExtendClass(string $guid, array $use, ...) : void
  - setExtendInterface(string $guid, array $use, ...) : void
  - setUseAs(string $guid, array $use, ...) : void
  - getCleanNamespace(string $namespace) : string
  - getUseNamespace(string $namespace, string $as = 'default') : string
  - addToHeader(string $guid, string $string) : void
  - setLicensingTemplate(string $guid, array $guiMapper) : void
  - setHeader(string $guid, array $guiMapper) : void
  - setMainClassCode(string $guid, array $guiMapper) : void
  - setSuperPowers(string $guid) : void
}

note right of Power::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Customcode $customcode
    Gui $gui
    Superpower $superpower
end note

note left of Power::load
  load all the powers linked to this component

  since: 3.2.0
  return: void
end note

note right of Power::get
  Get a power

  since: 3.2.0
  return: ?object
end note

note left of Power::set
  Set a power

  since: 3.2.0
  return: bool
end note

note right of Power::isPowerSet
  Check if the power is already set

  since: 3.2.0
  return: bool
end note

note left of Power::isGuidValid
  Validate the GUID

  since: 3.2.0
  return: bool
end note

note right of Power::getPowerData
  Get the power data from the database

  since: 3.2.0
  return: ?object
end note

note left of Power::setNamespace
  Set the namespace for this power

  since: 3.2.0
  return: bool
end note

note right of Power::setUseSelection
  Set Use Classes

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note left of Power::setLoadSelection
  Load Extra Classes

  since: 3.2.0
  return: void
end note

note right of Power::setComposer
  Set Composer Linked Use and Access Point

  since: 3.2.0
  return: void
end note

note left of Power::setImplements
  Set Implements Interface classes

  since: 3.2.0
  return: void
end note

note right of Power::setExtend
  Set Extend

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note left of Power::setExtendClass
  Set Extend Class

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note right of Power::setExtendInterface
  Set Extend Interface

  since: 3.2.2
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note left of Power::setUseAs
  Set Extra Use Classes

  since: 3.2.0
  return: void
  
  arguments:
    string $guid
    array $use
    array $as
end note

note right of Power::getCleanNamespace
  Get Clean Namespace without use or ; as part of the name space

  since: 3.2.0
  return: string
end note

note left of Power::getUseNamespace
  Get [use Namespace\Class;]

  since: 3.2.0
  return: string
end note

note right of Power::addToHeader
  Add to class header

  since: 3.2.0
  return: void
end note

note left of Power::setLicensingTemplate
  Set the power licensing template

  since: 3.2.0
  return: void
end note

note right of Power::setHeader
  Set the power header script

  since: 3.2.0
  return: void
end note

note left of Power::setMainClassCode
  Set the power main class code

  since: 3.2.0
  return: void
end note

note right of Power::setSuperPowers
  Set the super powers of this power

  since: 3.2.0
  return: void
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
Super---b836c1b1_b6b1_44f7_b8a2_9a763a4185b1---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")