### JCB! Power
# final class FileInjector (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**

```uml
@startuml

class FileInjector << (F,LightGreen) >> #RoyalBlue {
  # Power $power
  # JoomlaPower $joomla
  + __construct(Power $power, JoomlaPower $joomla)
  + add(string $file, string $data, ...) : void
  - openFileWithLock(string $file) : resource
  - processFile(resource $actual_file, resource $temp_file, ...) : void
  - truncateIfNeeded(resource $actual_file, string $data, ...) : void
  - copyRemainingData(resource $actual_file, resource $temp_file, ...) : void
  - injectSuperPowers(resource $actual_file) : void
  - injectJoomlaPowers(resource $actual_file) : void
}

note right of FileInjector::__construct
  Constructor.

  since: 3.2.1
end note

note left of FileInjector::add
  Inserts or replaces data in a file at a specific position.

  since: 3.2.0
  return: void
  
  arguments:
    string $file
    string $data
    int $position
    ?int $replace = null
end note

note right of FileInjector::openFileWithLock
  Opens a file and acquires an exclusive lock on it.

  since: 3.2.0
  return: resource
end note

note left of FileInjector::processFile
  Processes the file for data insertion and copying the remaining data.

  since: 3.2.0
  return: void
  
  arguments:
    resource $actual_file
    resource $temp_file
    string $data
    int $position
    ?int $replace
end note

note right of FileInjector::truncateIfNeeded
  Truncates the file after data insertion if necessary.

  since: 3.2.0
  return: void
  
  arguments:
    resource $actual_file
    string $data
    int $position
end note

note left of FileInjector::copyRemainingData
  Copies the remaining data from the temporary stream to the actual file.

  since: 3.2.0
  return: void
  
  arguments:
    resource $actual_file
    resource $temp_file
    int $position
    ?int $replace
end note

note right of FileInjector::injectSuperPowers
  Injects super powers into the file content, if found, and updates the file.

  since: 3.2.0
  return: void
end note

note left of FileInjector::injectJoomlaPowers
  Injects Joomla powers into the file content, if found, and updates the file.

  since: 3.2.1
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
Super---23f2ca33_440a_4941_8e9a_4bc67522c0cb---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")