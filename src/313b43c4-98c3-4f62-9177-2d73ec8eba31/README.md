### JCB! Power
# class Customcode (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**

```uml
@startuml

class Customcode  #Gold {
  + array $functionNameMemory
  + $active
  + $memory
  # $data
  # Config $config
  # Placeholder $placeholder
  # Extractor $extractor
  # Power $power
  # JoomlaPower $joomla
  # External $external
  # $db
  + __construct(Config $config, Placeholder $placeholder, ...)
  + update(string $string, int $debug) : string
  + set(string $string, int $debug, ...) : string
  + get(?array $ids = null, bool $setLang = true, ...) : bool
  # insert(array $ids, string $string, ...) : string
  # buildPlaceholders(array $item, array $code, ...) : void
  # check(array $ids) : Mixed
}

note right of Customcode::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Extractor $extractor
    Power $power
    JoomlaPower $joomla
    External $external
end note

note right of Customcode::update
  Update **ALL** dynamic values in a strings here
We can now at any time debug the
dynamic build values if it gets broken

  since: 3.2.0
  return: string
end note

note right of Customcode::set
  Set the custom code data & can load it in to string

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    int $debug
    ?int $not = null
end note

note right of Customcode::get
  Load the custom code from the system

  since: 3.2.0
  return: bool
  
  arguments:
    ?array $ids = null
    bool $setLang = true
    int $debug
end note

note right of Customcode::insert
  Insert the custom code into the string

  since: 3.2.0
  return: string
  
  arguments:
    array $ids
    string $string
    int $debug
end note

note right of Customcode::buildPlaceholders
  Build custom code placeholders

  since: 3.2.0
  return: void
  
  arguments:
    array $item
    array $code
    int $debug
end note

note right of Customcode::check
  check if we already have these ids in local memory

  since: 3.2.0
  return: Mixed
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
Super---313b43c4_98c3_4f62_9177_2d73ec8eba31---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")